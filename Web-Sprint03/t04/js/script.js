let houseMixin = {
    wordReplace(old, newly) {
        this.description = this.description.replace(old, newly);
        return this.description;
    },

    wordInsertAfter(old, newly) {
        this.description = this.description.replace(old, old + " " + newly);
    },

    wordDelete(old) {
        this.description = this.description.replace(old, "");
    },

    wordEncrypt() {
        var input = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        var output = 'NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm';
        var index = x => input.indexOf(x);
        var translate = x => index(x) > -1 ? output[index(x)] : x;
        this.description = this.description.split('').map(translate).join('');
        return this.description;
    },

    wordDecrypt() {
        var output = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        var input = 'NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm';
        var index = x => input.indexOf(x);
        var translate = x => index(x) > -1 ? output[index(x)] : x;
        this.description = this.description.split('').map(translate).join('');
        return this.description;
    }
}
