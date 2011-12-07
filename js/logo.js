var Kinetic = function(canvasId){
    this._canvas = document.getElementById(canvasId);
    this._context = this._canvas.getContext("2d");
    this._listening = false;
    this.stage = undefined;
	    
    // desktop flags
    this._mousePos = null;
    this._mouseDown = false;
    this._mouseUp = false;
    this._mouseOver = false;
    this._mouseMove = false;
    
    // mobile flags
    this._touchPos = null;
    this._touchStart = false;
    this._touchMove = false;
    this._touchEnd = false;
    
    // Region Events
    this._currentRegion = null;
    this._regionIndex = 0;
    this._lastRegionIndex = -1;
    this._mouseOverRegionIndex = -1;
    this._mouseDown = false;
	
    // Animation
    this._t = 0;
    this._timeInterval = 0;
    this._startTime = 0;
    this._lastTime = 0;
    this._frame = 0;
    this._animating = false;
    
    // provided by Paul Irish
    window.requestAnimFrame = (function(callback){
        return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
        function(callback){
            window.setTimeout(callback, 1000 / 60);
        };
    })();
};

// ======================================= GENERAL

Kinetic.prototype.getContext = function(){
    return this._context;
};

Kinetic.prototype.getCanvas = function(){
    return this._canvas;
};

Kinetic.prototype.clear = function(){
    this._context.clearRect(0, 0, this._canvas.width, this._canvas.height);
};

Kinetic.prototype.getCanvasPos = function(){
    var obj = this.getCanvas();
    var top = 0;
    var left = 0;
    while (obj.tagName != "BODY") {
        top += obj.offsetTop;
        left += obj.offsetLeft;
        obj = obj.offsetParent;
    }
    return {
        top: top,
        left: left
    };
};

Kinetic.prototype._stage = function(){
    if (this.stage !== undefined) {
        this.stage();
        
        // desktop flags
        this._mouseOver = false;
        this._mouseMove = false;
        this._mouseDown = false;
        this._mouseUp = false;
        
        // mobile touch flags
        this._touchStart = false;
        this._touchMove = false;
        this._touchEnd = false;
    }
};

Kinetic.prototype.setStage = function(func){
    this.stage = func;
    this._listen();
};

// ======================================= CANVAS EVENTS

Kinetic.prototype._handleEvent = function(evt){
    if (!evt) {
        evt = window.event;
    }
    
    this._setMousePosition(evt);
    this._setTouchPosition(evt);
    this._regionIndex = 0;
    
    if (!this._animating) {
        this._stage();
    }
};

Kinetic.prototype._listen = function(){
    var that = this;
    this._stage();
    
    // desktop events
    this._canvas.addEventListener("mousedown", function(evt){
        that._mouseDown = true;
        that.mouseDown = true;
        that._handleEvent(evt);
    }, false);
    
    this._canvas.addEventListener("mousemove", function(evt){
        that._handleEvent(evt);
    }, false);
    
    this._canvas.addEventListener("mouseup", function(evt){
        that._mouseUp = true;
        that.mouseDown = false;
        that._handleEvent(evt);
    }, false);
    
    this._canvas.addEventListener("mouseover", function(evt){
        that._handleEvent(evt);
    }, false);
    
    this._canvas.addEventListener("mouseout", function(evt){
        that._mousePos = null;
    }, false);
    
    // mobile events
    this._canvas.addEventListener("touchstart", function(evt){
        evt.preventDefault();
        that._touchStart = true;
        that._handleEvent(evt);
    }, false);
    
    this._canvas.addEventListener("touchmove", function(evt){
        evt.preventDefault();
        that._handleEvent(evt);
    }, false);
    
    this._canvas.addEventListener("touchend", function(evt){
        evt.preventDefault();
        that._touchEnd = true;
        that._handleEvent(evt);
    }, false);
    
};

Kinetic.prototype.getMousePos = function(evt){
    return this._mousePos;
};

Kinetic.prototype.getTouchPos = function(evt){
    return this._touchPos;
};

Kinetic.prototype._setMousePosition = function(evt){
    var mouseX = evt.clientX - this.getCanvasPos().left + window.pageXOffset;
    var mouseY = evt.clientY - this.getCanvasPos().top + window.pageYOffset;
    this._mousePos = {
        x: mouseX,
        y: mouseY
    };
};

Kinetic.prototype._setTouchPosition = function(evt){
    if (evt.touches !== undefined && evt.touches.length == 1) { // Only deal with
        // one finger
        var touch = evt.touches[0];
        // Get the information for finger #1
        var touchX = touch.pageX - this.getCanvasPos().left + window.pageXOffset;
        var touchY = touch.pageY - this.getCanvasPos().top + window.pageYOffset;
        
        this._touchPos = {
            x: touchX,
            y: touchY
        };
    }
};

Kinetic.prototype.isMouseDown = function(){
    return this._mouseDown;
};

// ======================================= REGION EVENTS

Kinetic.prototype.beginRegion = function(){
    this._currentRegion = {};
    this._regionIndex++;
};

Kinetic.prototype.addRegionEventListener = function(type, func){
    var event = (type.indexOf('touch') == -1) ? 'on' + type : type;
    this._currentRegion[event] = func;
};

Kinetic.prototype.closeRegion = function(){
    var pos = this._touchPos || this._mousePos;
    
    if (pos !== null && this._context.isPointInPath(pos.x, pos.y)) {
        if (this._lastRegionIndex != this._regionIndex) {
            this._lastRegionIndex = this._regionIndex;
        }
        
        // handle onmousedown
        if (this._mouseDown && this._currentRegion.onmousedown !== undefined) {
            this._currentRegion.onmousedown();
            this._mouseDown = false;
        }
        
        // handle onmouseup
        else if (this._mouseUp && this._currentRegion.onmouseup !== undefined) {
            this._currentRegion.onmouseup();
            this._mouseUp = false;
        }
        
        // handle onmouseover
        else if (!this._mouseOver && this._regionIndex != this._mouseOverRegionIndex && this._currentRegion.onmouseover !== undefined) {
            this._currentRegion.onmouseover();
            this._mouseOver = true;
            this._mouseOverRegionIndex = this._regionIndex;
        }
        
        // handle onmousemove
        else if (!this._mouseMove && this._currentRegion.onmousemove !== undefined) {
            this._currentRegion.onmousemove();
            this._mouseMove = true;
        }
        
        // handle touchstart
        if (this._touchStart && this._currentRegion.touchstart !== undefined) {
            this._currentRegion.touchstart();
            this._touchStart = false;
        }
        
        // handle touchend
        if (this._touchEnd && this._currentRegion.touchend !== undefined) {
            this._currentRegion.touchend();
            this._touchEnd = false;
        }
        
        // handle touchmove
        if (!this._touchMove && this._currentRegion.touchmove !== undefined) {
            this._currentRegion.touchmove();
            this._touchMove = true;
        }
        
    }
    else if (this._regionIndex == this._lastRegionIndex) {
        this._lastRegionIndex = -1;
        this._mouseOverRegionIndex = -1;
        
        // handle mouseout condition
        if (this._currentRegion.onmouseout !== undefined) {
            this._currentRegion.onmouseout();
        }
    }
};

// ======================================= ANIMATION

Kinetic.prototype.isAnimating = function(){
    return this._animating;
};

Kinetic.prototype.getFrame = function(){
    return this._frame;
};

Kinetic.prototype.startAnimation = function(){
    this._animating = true;
    var date = new Date();
    this._startTime = date.getTime();
    this._lastTime = this._startTime;
    
    this._stage();
    
    this._animationLoop();
};

Kinetic.prototype.stopAnimation = function(){
    this._animating = false;
};

Kinetic.prototype.getTimeInterval = function(){
    return this._timeInterval;
};

Kinetic.prototype.getTime = function(){
    return this._t;
};

Kinetic.prototype.getFps = function(){
    return this._timeInterval > 0 ? 1000 / this._timeInterval : 0;
};

Kinetic.prototype._animationLoop = function(){
    var that = this;
    
    this._frame++;
    var date = new Date();
    var thisTime = date.getTime();
    this._timeInterval = thisTime - this._lastTime;
    this._t += this._timeInterval;
    this._lastTime = thisTime;
    
    this._stage();
    
    if (this._animating) {
        requestAnimFrame(function(){
            that._animationLoop();
        });
        
    }
};