$(function(){


    var color = "#000000";
    var context = $("canvas")[0].getContext("2d");
    var canvas = $("canvas");
    var lastEvent;
    var mouseDown = false;
    var weight = "3";

// //Bind weight val to selection on click
    var updateWeight = function() {
        return weight;
    };

//Download your drawing
//     var getImgURL = function() {
//         var img = ;
//     }

//Draw on the canvas on mouse events
    canvas.mousedown(function(e) {
        lastEvent = e;
        mousedown = true;
    }).mousemove(function(e) {
        if (mousedown) {
            context.beginPath();
            context.moveTo(lastEvent.offsetX, lastEvent.offsetY);
            context.lineTo(e.offsetX, e.offsetY);
            context.strokeStyle = color;
            context.lineWidth = updateWeight();
            context.stroke();
            lastEvent = e;
        }
    }).mouseup(function() {
        mousedown = false;
    }).mouseleave(function() {
        canvas.mouseup();
        $('.sigValue').val(canvas[0].toDataURL("image/png"));
    });

    //clear canvas
    var clearSig = function(){
        context.clearRect(0, 0, 300, 200);
        $('.sigValue').val(canvas[0].toDataURL("image/png"));
    }

    $("#clearSig").click(clearSig);

})
//# sourceMappingURL=e-signature.js.map
