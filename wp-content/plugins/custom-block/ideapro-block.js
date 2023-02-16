wp.blocks.registerBlockType('ideapro/custom-block', {
    title: 'Slider',
    icon: 'hammer',
    category: 'design',
    attributes: {
        companyName: { type: 'string'},
        companyPhone: { type: 'string'},
        companyAdress: { type: 'string'}
    },
    edit: function(props){
        return (
            React.createElement("div", null, 
                React.createElement("label", null, "Company name"), 
                React.createElement("input", {
                    type: "text",
                    placeholder: "company name"
                }), 
                React.createElement("label", null, "Company phone"), 
                React.createElement("input", {
                    type: "text",
                    value: props.attributes.companyPhone
                }), 
                React.createElement("label", null, "Company adress"), 
                React.createElement("input", {
                    type: "text",
                    placeholder: "company adress"
                })
            )
        );
    },
    save: function(props){
        return null;
    }
});
