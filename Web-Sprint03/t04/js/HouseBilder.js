function houseblueprint(address, description, owner, size, roomCount) {
    this.address = address;
    this.date = new Date();
    this.size = size;
    this.description = description;
    this.owner = owner;
    this.getDaysToBuild = getDaysToBuild;
    this.roomCount = roomCount;
    this._averageBuildSpeed = 0.5;
};

function getDaysToBuild() {
    return this.size / 0.5;
}

function HouseBuilder(address, description, owner, size, roomCount) {
    let houseBlueprint = new houseblueprint();
    Object.getPrototypeOf(houseBlueprint).constructor.call(this, address, description, owner, size, roomCount);
}

// const house = new HouseBuilder('88 Crescent Avenue',
//     'Spacious town house with wood flooring, 2-car garage, and a back patio.',
//     'J. Smith', 110, 5);
// Object.assign(house, houseMixin);
// console.log(house.getDaysToBuild());
// // 220
// console.log(house.description);
// // Spacious town house with wood flooring, 2-car garage, and a back patio.
// house.wordReplace("wood", "tile");
// console.log(house.description);
// // Spacious town house with tile flooring, 2-car garage, and a back patio.

// house.wordDelete("town ");
// console.log(house.description);
// // Spacious house with tile flooring, 2-car garage, and a back patio.

// house.wordInsertAfter("with", "marble");
// console.log(house.description);
// // Spacious house with marble tile flooring, 2-car garage, and a back patio.

// house.wordEncrypt();
// console.log(house.description);
// // Fcnpvbhf ubhfr jvgu zneoyr gvyr sybbevat, 2-pne tnentr, naq n onpx cngvb.

// house.wordDecrypt();
// console.log(house.description);
// // Spacious house with marble tile flooring, 2-car garage, and a back patio.
