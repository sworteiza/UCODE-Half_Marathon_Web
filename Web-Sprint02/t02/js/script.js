function func() {
    let animal = prompt('What animal is the superhero most similar to?');
    var description;
    var reg = new RegExp("[0-9]");
    if (reg.test(animal) || animal.length >= 20) {
        alert("FALSE");
        return;
    }
    var reg1 = new RegExp("");
    let gender = prompt('Is the superhero male or female? Leave blank if unknown or other.');
    if (/[0-9]/.test(gender) || (!/male/.test(gender) && !/female/.test(gender) && !reg1.test(gender))) {
        alert("FALSE");
        return;
    }

    let age = prompt('How old is the superhero?');
    if (!/[0-9]/.test(age) || age.length > 5) {
        alert("FALSE");
        return;
    }

    if (/female/.test(gender) && age < 18) {
        description = "girl";
    }
    else if (/female/.test(gender) && age > 18) {
        description = "woman";
    }
    else if (/male/.test(gender) && age < 18) {
        description = "boy";
    }
    else if (/male/.test(gender) && age > 18) {
        description = "man";
    }
    else if (reg1.test(gender) && age < 18) {
        description = "kid";
    }
    else if (reg1.test(gender) && age > 18) {
        description = "hero";
    }

    const message = `The superhero name is ${animal}-${description}`;

    alert(message);

}

func();
