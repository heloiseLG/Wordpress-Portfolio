wp.blocks.registerBlockType('ideapro/custom-block',{
    title: 'Slider',
    icon: 'hammer',
    category: 'design',
    attributes: {
        companyName: { type: 'string'},
        companyPhone: { type: 'string'},
        companyAdress: { type: 'string'}
    },
    edit: function(props){
        return 
        React.createElement("div", null, /*#__PURE__*/React.createElement("label", null, "Company name"), /*#__PURE__*/React.createElement("input", {
            type: "text",
            placeholder: "company name"
          }), /*#__PURE__*/React.createElement("label", null, "Company phone"), /*#__PURE__*/React.createElement("input", {
            type: "text",
            value: ""
          }), /*#__PURE__*/React.createElement("label", null, "Company adress"), /*#__PURE__*/React.createElement("input", {
            type: "text",
            placeholder: "company adress"
          }));
    },
    save: function(props){
        return null;
    }
})