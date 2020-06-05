const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, MediaUpload, PlainText } = wp.blockEditor;
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
      source: 'text',
      selector: 'h1'
    },
    titleImage: {
      type: 'string',
      default: null
    }

  },

  
  // built-in functions
  edit({ attributes, setAttributes }) {

    const { title, titleImage } = attributes;

    // custom functions
    function onChangeTitle(newTitle) {
      setAttributes( { title: newTitle } );
    }
    function onSelectImage(newImage) {
      setAttributes( { titleImage: newImage.sizes.full.url } )
    }

    return ([
      <InspectorControls style={{ marginBottom: '40px' }}>
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
      <div>
        <figure className="wp-block-jhy-custom-title__img">
          <img src={titleImage} alt="Title image"></img>
        </figure>
        <div className="wp-block-jhy-custom-title__text">
          <RichText key="editable"
                    tagName="h1"
                    placeholder="Your Title Text"
                    value={ title }
                    onChange={ onChangeTitle } 
                    />
          
        </div>
      </div>
    ]);
  },

  save({ attributes }) {

    const { title, titleImage } = attributes;

    return (
      <div>
        <figure className="wp-block-jhy-custom-title__img">
          <img src={titleImage} alt="Title image"></img>
        </figure>
        <div className="wp-block-jhy-custom-title__text">
          
          <RichText.Content tagName="h1"
                            value={ title } />
      
        </div>
      </div>
    );
  }

});