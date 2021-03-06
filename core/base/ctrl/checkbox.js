/**
    default checkBox controller
 */

shape.registerCtrl("base/checkbox",{
    model:null,
    init:function(){
        this.checkBox = this.view;
        //var inp = $(this.view).find("input")[0];
        $(this.checkBox).change(this.onChange);
    },
    toView:function(){
        this.checkBox.value = this.model;
        //console.log("Binding input text: " + JSON.stringify(this.model));
    },
    onChange:function(){
        this.model = ! this.model;
        this.checkBox.value = this.model;
        this.modelAssign(this.model);
    }
});