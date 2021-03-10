function Calculator(result = 0){
    this.result;
    this.init = init;
    this.add = add;
    this.div = div;
    this.sub = sub;
    this.mul = mul;
    this.alert = function(){
        setTimeout(alert, 5000, this.result);
    }

};

function init(num){
    this.result = num;
    return this;
}

function add(num){
    this.result = this.result + num; 
    return this;
}

function sub(num){
    this.result = this.result - num; 
    return this;
}

function mul(num){
    this.result = this.result * num; 
    return this;
}

function div(num){
    this.result = this.result / num; 
    return this;
}

