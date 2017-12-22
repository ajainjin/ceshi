if(typeof console == "undefined" || !window.console){
    window.console = {};
    var method = ['info','log','error','warning'];
    for(var i=0;i<method.length;i++){
        window.console[method[i]] = function(){};
    }
}