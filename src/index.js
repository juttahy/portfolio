const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, ColorPalette, MediaUpload } = wp.blockEditor;
const { PanelBody, IconButton } = wp.components;

registerBlockType('jhy/custom-title', {

  // built-in attributes
  title: 'Custom Title',
  description: 'Block for custom page title with image',
  icon: 'heart',
  category: 'layout',

  // custom attributes
  attributes: {
    title: {
      type: 'string', 
      source: 'html',
      selector: 'h2'
    },
    titleColor: {
      type: 'string',
      default: '#ffffff'
    },
    body: {
      type: 'string',
      source: 'html',
      selector: 'p'
    },
    titleImage: {
      type: 'string',
      default: null
    }

  },

  
  // built-in functions
  edit({ attributes, setAttributes }) {

    const { title, body, titleColor, titleImage } = attributes;

    // custom functions
    function onChangeTitle(newTitle) {
      setAttributes( { title: newTitle } );
    }
    function onChangeBody(newBody) {
      setAttributes( { body: newBody } );
    }
    function onTitleColorChange(newColor) {
      setAttributes( { titleColor: newColor } );
    }
    function onSelectImage(newImage) {
      setAttributes( { titleImage: newImage.sizes.full.url } )
    }

    return ([
      <InspectorControls style={{ marginBottom: '40px' }}>
        <PanelBody title={ 'Font Color Settings' }>
          <p><strong>Select Title Color:</strong></p>
          <ColorPalette value={ titleColor }
                        onChange={ onTitleColorChange } />
        </PanelBody>
        <PanelBody title={ 'Image Settings' }>
          <p><strong>Select Title Image:</strong></p>
          <MediaUpload 
                onSelect={ onSelectImage }
                type="image"
                value={ titleImage }
                render={ ( { open } ) => (
                  <IconButton
                        onClick={ open }
                        icon="upload"
                        className="editor-media-placeholder__button is-button is-default is-large">
                        Title Image
                  </IconButton>
                ) } />
        </PanelBody>
      </InspectorControls>,
      <div class="title-container">
        <div class="title-container__img">
          <img src={titleImage} alt="Title image"/>
        </div>
        <div class="title-container__text">
          <RichText key="editable"
                    tagName="h2"
                    placeholder="Your Title Text"
                    value={ title }
                    onChange={ onChangeTitle } 
                    style={{ color: titleColor }}
                    />
          <RichText key="editable"
                    tagName="p"
                    placeholder="Your paragraph Text"
                    value={ body }
                    onChange={ onChangeBody } />
        </div>
      </div>
    ]);
  },

  save({ attributes }) {

    const { title, body, titleColor, titleImage } = attributes;

    return (
      <div class="title-container">
        <div class="title-container__img">
          <img src={titleImage} alt="Title image"/>
        </div>
        <div class="title-container__text">
          <h1 style={{ color: titleColor }}>{ title }</h1>
          <RichText.Content tagName="p"
                          value={ body } />
        </div>
      </div>
    );
  }

});