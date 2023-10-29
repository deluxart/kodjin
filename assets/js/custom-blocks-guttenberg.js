// const { registerBlockType } = wp.blocks;
const { TextControl, RichText, URLInputButton } = wp.blockEditor;

wp.blocks.registerBlockType('brad/custom-block', {
    title: 'Custom Block',
    icon: 'shield',
    category: 'common',
    attributes: {
        title: {
            type: 'string',
            default: 'Title',
        },
        description: {
            type: 'string',
            default: 'Description',
        },
        buttonText: {
            type: 'string',
            default: 'Button text',
        },
        buttonLink: {
            type: 'string',
            default: '#',
        },
    },
    edit: function(props) {
        const { attributes, setAttributes } = props;

        return (
            <div>
                <TextControl
                    label="Title"
                    value={attributes.title}
                    onChange={(title) => setAttributes({ title })}
                />
                <TextControl
                    label="Description"
                    value={attributes.description}
                    onChange={(description) => setAttributes({ description })}
                />
                <TextControl
                    label="Button text"
                    value={attributes.buttonText}
                    onChange={(buttonText) => setAttributes({ buttonText })}
                />
                <URLInputButton
                    value={attributes.buttonLink}
                    onChange={(buttonLink) => setAttributes({ buttonLink })}
                >
                    {attributes.buttonText}
                </URLInputButton>
            </div>
        );
    },
    save: function(props) {
        const { attributes } = props;

        return (
            <div>
                <h2>{attributes.title}</h2>
                <p>{attributes.description}</p>
                <a href={attributes.buttonLink}>{attributes.buttonText}</a>
            </div>
        );
    },
});
