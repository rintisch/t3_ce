/* Optional Javascript to close the radio button version by clicking it again */

var myRadios = document.getElementsByName('tabs2');
var setCheck;
var x = 0;
for(x = 0; x < myRadios.length; x++){
    myRadios[x].onclick = function(){
        if(setCheck != this){
            setCheck = this;
        }else{
            this.checked = false;
            setCheck = null;
        }
    };
}


