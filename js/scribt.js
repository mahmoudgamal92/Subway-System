function Place(id)
{
    var element = document.getElementById(id);
    var oldp;
   
    element.onfocus = function () {
        oldp = this.placeholder;
        this.placeholder = "";

    }
    element.onblur = function () {
        this.placeholder = oldp;
    }
}
Place("text1");
Place("text2");