function total(addCount, addPrice, currentTotal = 0) {
    let add = 0;
    for (let i = 0; i < addCount; i++) {
        add += addPrice;
    }

    currentTotal += add;
    return currentTotal;
}
