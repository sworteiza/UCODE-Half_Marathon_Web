class Node {
    constructor(data) {
        this.data = data;
        this.next = null;
    }
}

class LinkedList {
    constructor() {
        this.head = null;
        this.size = 0;
    }

    add(data) {
        let node = new Node(data);

        if (this.size === 0) {
            this.head = node;
        } else {
            let current = this.head;

            while (current.next) {
                current = current.next;
            }

            current.next = new Node(data);
        }

        this.size++;
    }

    count() {
        return this.size;
    }

    log() {
        var curr = this.head;
        var str = "";
        while (curr) {
            str += curr.data + ", ";
            curr = curr.next;
        }
        console.log(str);
    }

    remove(val) {
        if (this.size === 0) {
            return undefined;
        }

        if (this.head.data === val) {
            this.head = this.head.next;
            return this;
        }

        let previousNode = this.head;
        let thisNode = previousNode.next;

        while (thisNode) {
            if (thisNode.data === val) {
                break;
            }

            previousNode = thisNode;
            thisNode = thisNode.next;
        }

        if (thisNode === null) {
            return undefined;
        }

        previousNode.next = thisNode.next;
        this.size--;
        return this;
    }

    clear() {
        this.head = null;
    }

    contains(val) {
        let curr = this.head;
        let fl = false;
        while (curr) {
            if (curr.data === val) {
                fl = true;
                return fl;
            }
            curr = curr.next;
        }
        return fl;
    }

    [Symbol.iterator] = function () {
        let curr = this.head;
        return {
            next() {
                if (curr) {
                    let value = curr.data;
                    curr = curr.next;
                    return { value: value, done: false };
                }
                return { done: true };
            }
        }
    }
}

export function createLinkedList(arr) {
    var ll = new LinkedList();
    for (let i = 0; i < arr.length; i++) {
        ll.add(arr[i]);
    }

    return ll;
}

