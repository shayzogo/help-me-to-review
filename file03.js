const productIds = document.getElementById('user-choosed-product');
const segmentsSelectElement = document.getElementById('segments-selection');
const userHistoryLogs = document.getElementById('user-history');


// I want to retrieve only products with even id
let filteredProductsIds = [];
productIds.forEach(productId => {
	if (productId % 2 === 0) {
		filteredProductsIds.push(productId);
	}
});

// I want to get the segments only if selected
let chosenSegments = [];
for (let i = 0; i < segmentsSelectElement.length; i++) {
	if (segmentsSelectElement[i].selected) {
		chosenSegments.push(segmentsSelectElement[i].value);
	}
}

// I want to iterate the whole array and display in console
userHistoryLogs.forEach(userLog => {
	console.log(userLog);
});



