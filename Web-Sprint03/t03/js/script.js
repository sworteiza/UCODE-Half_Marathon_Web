class Human {
    constructor(firstName, lastName, gender, age, calories = 200) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.gender = gender;
        this.age = age;
        this.calories = calories;
        this.time = function() {
            let a = setInterval(() => { this.calories -= 200 }, 60000);
        };
        this.time();
    }

    sleepFor() {
        document.getElementById("peep").innerHTML = 'I am sleeping';
        setTimeout(() => {
            document.getElementById("peep").innerHTML = "I'm awake now";
            setTimeout(() => document.getElementById("peep").innerHTML = "", 2000);
        }, 5000);
    }

    feed() {
        if (this.calories > 500) {
            document.getElementById("peep1").innerHTML = 'I am not hungry';
            setTimeout(() => document.getElementById("peep1").innerHTML = "", 2000);
        } else if (this.calories < 500) {
            document.getElementById("peep1").innerHTML = 'Nom nom nom';
            this.calories = this.calories + 200;
            if (this.calories < 500) {
                setTimeout(() => {
                    document.getElementById("peep1").innerHTML = "I am still hungry";
                    setTimeout(() => document.getElementById("peep1").innerHTML = "", 2000);
                }, 10000);
            } else {
                setTimeout(() => document.getElementById("peep1").innerHTML = "", 10000)
            }

        }

    }
}

class Superhero extends Human {
    fly() {
        document.getElementById("peep").innerHTML = 'I am flying';
        setTimeout(() => document.getElementById("peep").innerHTML = "", 10000);
    }

    fightWithEvil() {
        document.getElementById("peep1").innerHTML = 'Khhhh-chh..';
        setTimeout(() => {
            document.getElementById("peep1").innerHTML = "Bang-g-g-g.";
            setTimeout(() => {
                document.getElementById("peep1").innerHTML = "Evil is defeated";
                setTimeout(() => document.getElementById("peep1").innerHTML = "", 3000);
            }, 3000);
        }, 3000);
    }

}
var human = new Superhero();
document.getElementById("fl").style.display = "none";
document.getElementById("figh").style.display = "none";
document.getElementById("sl").onclick = function() { human.sleepFor(); };
document.getElementById("fe").onclick = function() { human.feed(); };
document.getElementById("turn").onclick = function() {
    document.getElementById("sl").style.display = "none";
    document.getElementById("fe").style.display = "none";
    document.getElementById("fl").style.display = "block";
    document.getElementById("figh").style.display = "block";
    document.getElementById("turn").style.display = "none";
    document.getElementById("hum").innerHTML = "Superhero";
}
document.getElementById("fl").onclick = function() {
    human.fly();
}
document.getElementById("figh").onclick = function() {
    human.fightWithEvil();
}