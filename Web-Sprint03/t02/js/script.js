class Timer {
    constructor(title, delay, stopCount) {
        this.title = title;
        this.delay = delay;
        this.stopCount = stopCount;
    }

    start() {
        console.log(`Timer ${this.title} started (delay=${this.delay},  stopCount=${this.stopCount})`);
        let timer = setInterval(() => {
            this.stopCount--;
            this.tick();
            if (this.stopCount == 0) {
                this.stop(timer);
                console.log(`Timer ${this.title} stopped`);
            }
        }, this.delay);

    }


    tick() {
        console.log(`Timer ${this.title} Tick | cycles left ${this.stopCount}`);
    }

    stop(timer) {
        clearInterval(timer);
    }
}

function runTimer(id, delay, counter) {
    let time = new Timer(id, delay, counter);
    time.start();
}


//runTimer("Bleep", 1000, 5);


