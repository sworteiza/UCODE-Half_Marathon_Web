let validator = {
    set(target, property, value) {
        if (property === 'age') {
            if (typeof value !== 'number') {
                throw new TypeError('The age is not an integer');
            }
            if (value > 200) {
                throw new RangeError('The age is invalid');
            }
        }
        console.log(`Setting value '${value}' to '${property}'`);
        target[property] = value;
        return true;
    },


    get(target, property) {
        console.log(`Trying to access the property '${property}'...`);
        return target[property];
    }
}
