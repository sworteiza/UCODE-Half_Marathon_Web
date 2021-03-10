var concat = (function(string1, string2) {
    if (typeof(string2) == 'undefined') {
        function func1() {
            if (typeof(func1.count) == 'undefined') {
                func1.count = 0;
            }
            var string2 = prompt("Write string");
            func1.count++;
            return string1.concat(" ", string2);
        }
        return func1;
    } else {
        function func1() {
            return string1.concat(" ", string2);
        }
        return func1;
    }
});