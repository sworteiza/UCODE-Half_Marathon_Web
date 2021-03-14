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

