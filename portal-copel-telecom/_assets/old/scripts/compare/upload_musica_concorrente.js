(function (lib, img, cjs, ss) {

var p; // shortcut to reference prototypes

// library properties:
lib.properties = {
	width: 366,
	height: 211,
	fps: 24,
	color: "#FFFFFF",
	manifest: []
};



// symbols:



(lib.picutre = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// video2.svg
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#333333").s().p("ACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgbIBNAAIAAAbgAAUgIIAAgbIBNAAIAAAbgAhhgIIAAgbIBMAAIAAAbgAjYgIIAAgbIBMAAIAAAbg");
	this.shape.setTransform(65,59.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#CCCCCC").s().p("ACMCCIAAgcIBNAAIAAAcgAAUCCIAAgcIBNAAIAAAcgAhhCCIAAgcIBMAAIAAAcgAjYCCIAAgcIBMAAIAAAcgACMBTIAAgbIBNAAIAAAbgAAUBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgcIBNAAIAAAcgAAUgIIAAgcIBNAAIAAAcgAhhgIIAAgcIBMAAIAAAcgAjYgIIAAgcIBMAAIAAAcgACMg3IAAgbIBNAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgACMhlIAAgbIBNAAIAAAbgAAUhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbg");
	this.shape_1.setTransform(65,41.3);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#333333").s().p("ACMBTIAAgbIBNAAIAAAbgAAUBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgcIBNAAIAAAcgAAUgIIAAgcIBNAAIAAAcgAjYgIIAAgcIBMAAIAAAcgACMg3IAAgbIBNAAIAAAbg");
	this.shape_2.setTransform(65,55.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#CCCCCC").s().p("AhhCCIAAgcIBMAAIAAAcgAAUBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgcIBNAAIAAAcgAAUgIIAAgcIBNAAIAAAcgAhhgIIAAgcIBMAAIAAAcgAjYgIIAAgcIBMAAIAAAcgACMg3IAAgbIBNAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgACMhlIAAgbIBNAAIAAAbgAAUhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbg");
	this.shape_3.setTransform(65,41.3);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#333333").s().p("ACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgbIBNAAIAAAbgAAUBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAlIAAgcIBNAAIAAAcgAAUAlIAAgcIBNAAIAAAcgAjYAlIAAgcIBMAAIAAAcgACMgIIAAgbIBNAAIAAAbgAAUgIIAAgbIBNAAIAAAbgAjYgIIAAgbIBMAAIAAAbgACMg3IAAgbIBNAAIAAAbgACMhlIAAgcIBNAAIAAAcg");
	this.shape_4.setTransform(65,50.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#CCCCCC").s().p("AhhCCIAAgcIBMAAIAAAcgAhhBTIAAgbIBMAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgAAUgIIAAgcIBNAAIAAAcgAhhgIIAAgcIBMAAIAAAcgAjYgIIAAgcIBMAAIAAAcgACMg3IAAgbIBNAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgACMhlIAAgbIBNAAIAAAbgAAUhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbg");
	this.shape_5.setTransform(65,41.3);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#333333").s().p("ACMCwIAAgbIBNAAIAAAbgAAUCwIAAgbIBNAAIAAAbgAhhCwIAAgbIBMAAIAAAbgAjYCwIAAgbIBMAAIAAAbgACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgcIBNAAIAAAcgAAUBTIAAgcIBNAAIAAAcgAjYBTIAAgcIBMAAIAAAcgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgbIBNAAIAAAbgAAUgIIAAgbIBNAAIAAAbgAjYgIIAAgbIBMAAIAAAbgACMg2IAAgcIBNAAIAAAcgACMhlIAAgbIBNAAIAAAbgACMiUIAAgbIBNAAIAAAbg");
	this.shape_6.setTransform(65,45.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#CCCCCC").s().p("AglCCIAAgcIBKAAIAAAcgAglBTIAAgbIBKAAIAAAbgAglAkIAAgbIBKAAIAAAbgABQgIIAAgcIBNAAIAAAcgAglgIIAAgcIBKAAIAAAcgAicgIIAAgcIBMAAIAAAcgABQg3IAAgbIBNAAIAAAbgAglg3IAAgbIBKAAIAAAbgAicg3IAAgbIBMAAIAAAbgABQhlIAAgbIBNAAIAAAbgAglhlIAAgbIBKAAIAAAbgAichlIAAgbIBMAAIAAAbg");
	this.shape_7.setTransform(59,41.3);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#333333").s().p("ACMCwIAAgbIBNAAIAAAbgAAUCwIAAgbIBNAAIAAAbgAhhCwIAAgbIBMAAIAAAbgAjYCwIAAgbIBMAAIAAAbgACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgcIBNAAIAAAcgAAUBTIAAgcIBNAAIAAAcgAhhBTIAAgcIBMAAIAAAcgAjYBTIAAgcIBMAAIAAAcgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgbIBNAAIAAAbgAAUgIIAAgbIBNAAIAAAbgAjYgIIAAgbIBMAAIAAAbgACMg2IAAgcIBNAAIAAAcgAAUg2IAAgcIBNAAIAAAcgAjYg2IAAgcIBMAAIAAAcgACMhlIAAgbIBNAAIAAAbgACMiUIAAgbIBNAAIAAAbg");
	this.shape_8.setTransform(65,45.9);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#CCCCCC").s().p("AglBqIAAgbIBKAAIAAAbgAglA8IAAgcIBKAAIAAAcgAglANIAAgZIBKAAIAAAZgABQgfIAAgcIBNAAIAAAcgAglgfIAAgcIBKAAIAAAcgAicgfIAAgcIBMAAIAAAcgABQhOIAAgbIBNAAIAAAbgAglhOIAAgbIBKAAIAAAbgAichOIAAgbIBMAAIAAAbg");
	this.shape_9.setTransform(59,38.9);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#333333").s().p("ACMCZIAAgcIBNAAIAAAcgAAUCZIAAgcIBNAAIAAAcgAhhCZIAAgcIBMAAIAAAcgAjYCZIAAgcIBMAAIAAAcgACMBqIAAgbIBNAAIAAAbgAAUBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgAjYBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAAUANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgAjYANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAAUgfIAAgcIBNAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAjYhOIAAgbIBMAAIAAAbgAAUh8IAAgcIBNAAIAAAcgAjYh8IAAgcIBMAAIAAAcg");
	this.shape_10.setTransform(65,48.2);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#CCCCCC").s().p("AhhBTIAAgbIBMAAIAAAbgAhhAlIAAgcIBMAAIAAAcgACMgIIAAgbIBNAAIAAAbgAhhgIIAAgbIBMAAIAAAbgACMg3IAAgbIBNAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbg");
	this.shape_11.setTransform(65,36.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#333333").s().p("ACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgbIBNAAIAAAbgAAUBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAlIAAgcIBNAAIAAAcgAAUAlIAAgcIBNAAIAAAcgAhhAlIAAgcIBMAAIAAAcgAjYAlIAAgcIBMAAIAAAcgACMgIIAAgbIBNAAIAAAbgAAUgIIAAgbIBNAAIAAAbgAjYgIIAAgbIBMAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAjYg3IAAgbIBMAAIAAAbgAAUhlIAAgcIBNAAIAAAcgAjYhlIAAgcIBMAAIAAAcg");
	this.shape_12.setTransform(65,50.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#CCCCCC").s().p("AhhBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAAUgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbgAjYhOIAAgbIBMAAIAAAbg");
	this.shape_13.setTransform(65,38.9);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#333333").s().p("ACMBqIAAgbIBNAAIAAAbgAAUBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgAjYBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAAUA8IAAgcIBNAAIAAAcgAjYA8IAAgcIBMAAIAAAcgAAUANIAAgZIBNAAIAAAZgAjYANIAAgZIBMAAIAAAZgAAUgfIAAgcIBNAAIAAAcgAjYgfIAAgcIBMAAIAAAcgAAUhOIAAgbIBNAAIAAAbgAjYhOIAAgbIBMAAIAAAbg");
	this.shape_14.setTransform(65,52.9);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#CCCCCC").s().p("AhhCZIAAgcIBMAAIAAAcgACMBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAAUgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbgAjYhOIAAgbIBMAAIAAAbgACMh8IAAgcIBNAAIAAAcgAAUh8IAAgcIBNAAIAAAcgAhhh8IAAgcIBMAAIAAAcgAjYh8IAAgcIBMAAIAAAcg");
	this.shape_15.setTransform(65,43.6);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#333333").s().p("ACMBqIAAgbIBNAAIAAAbgAAUBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgAjYBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAjYA8IAAgcIBMAAIAAAcgAAUANIAAgZIBNAAIAAAZgAjYANIAAgZIBMAAIAAAZgAAUgfIAAgcIBNAAIAAAcgAjYgfIAAgcIBMAAIAAAcgAAUhOIAAgbIBNAAIAAAbg");
	this.shape_16.setTransform(65,52.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#CCCCCC").s().p("ACMCCIAAgcIBNAAIAAAcgAhhCCIAAgcIBMAAIAAAcgACMBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgACMAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgcIBNAAIAAAcgAAUgIIAAgcIBNAAIAAAcgAhhgIIAAgcIBMAAIAAAcgAjYgIIAAgcIBMAAIAAAcgACMg3IAAgbIBNAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgACMhlIAAgbIBNAAIAAAbgAAUhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbg");
	this.shape_17.setTransform(65,41.3);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#333333").s().p("ACMBTIAAgbIBNAAIAAAbgAAUBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgAAUgIIAAgcIBNAAIAAAcgAhhgIIAAgcIBMAAIAAAcgAjYgIIAAgcIBMAAIAAAcgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbg");
	this.shape_18.setTransform(65,55.2);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#CCCCCC").s().p("ACMCCIAAgcIBNAAIAAAcgACMBTIAAgbIBNAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgcIBNAAIAAAcgAAUgIIAAgcIBNAAIAAAcgAhhgIIAAgcIBMAAIAAAcgAjYgIIAAgcIBMAAIAAAcgACMg3IAAgbIBNAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgACMhlIAAgbIBNAAIAAAbgAAUhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbg");
	this.shape_19.setTransform(65,41.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#333333").s().p("ACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgbIBNAAIAAAbgAAUBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAlIAAgcIBNAAIAAAcgAhhAlIAAgcIBMAAIAAAcgAjYAlIAAgcIBMAAIAAAcgACMgIIAAgbIBNAAIAAAbgAhhgIIAAgbIBMAAIAAAbgAjYgIIAAgbIBMAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgAhhhlIAAgcIBMAAIAAAcgAjYhlIAAgcIBMAAIAAAcg");
	this.shape_20.setTransform(65,50.6);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#CCCCCC").s().p("AAUCCIAAgcIBNAAIAAAcgAAUBTIAAgbIBNAAIAAAbgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgACMgIIAAgcIBNAAIAAAcgAAUgIIAAgcIBNAAIAAAcgACMg3IAAgbIBNAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgACMhlIAAgbIBNAAIAAAbgAAUhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbg");
	this.shape_21.setTransform(65,41.3);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#333333").s().p("ACMCwIAAgbIBNAAIAAAbgAAUCwIAAgbIBNAAIAAAbgAhhCwIAAgbIBMAAIAAAbgAjYCwIAAgbIBMAAIAAAbgACMCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgcIBNAAIAAAcgAhhBTIAAgcIBMAAIAAAcgAjYBTIAAgcIBMAAIAAAcgACMAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgbIBNAAIAAAbgAhhgIIAAgbIBMAAIAAAbgAjYgIIAAgbIBMAAIAAAbgACMg2IAAgcIBNAAIAAAcgAhhg2IAAgcIBMAAIAAAcgAjYg2IAAgcIBMAAIAAAcgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbgAjYiUIAAgbIBMAAIAAAbg");
	this.shape_22.setTransform(65,45.9);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#CCCCCC").s().p("AglCZIAAgcIBKAAIAAAcgAglBqIAAgbIBKAAIAAAbgAglA8IAAgcIBKAAIAAAcgAglANIAAgZIBKAAIAAAZgAglgfIAAgcIBKAAIAAAcgABRhOIAAgbIBMAAIAAAbgAglhOIAAgbIBKAAIAAAbgABRh8IAAgcIBMAAIAAAcgAglh8IAAgcIBKAAIAAAcgAidh8IAAgcIBNAAIAAAcg");
	this.shape_23.setTransform(70.9,43.6);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#333333").s().p("ACMCwIAAgbIBNAAIAAAbgAAUCwIAAgbIBNAAIAAAbgAhhCwIAAgbIBMAAIAAAbgAjYCwIAAgbIBMAAIAAAbgACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgcIBNAAIAAAcgAhhBTIAAgcIBMAAIAAAcgAjYBTIAAgcIBMAAIAAAcgACMAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgbIBNAAIAAAbgAhhgIIAAgbIBMAAIAAAbgAjYgIIAAgbIBMAAIAAAbgACMg2IAAgcIBNAAIAAAcgAhhg2IAAgcIBMAAIAAAcgAjYg2IAAgcIBMAAIAAAcgACMhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbgACMiUIAAgbIBNAAIAAAbg");
	this.shape_24.setTransform(65,45.9);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#CCCCCC").s().p("ABQCCIAAgcIBNAAIAAAcgABQBTIAAgbIBNAAIAAAbgABQAkIAAgbIBNAAIAAAbgABQgIIAAgcIBNAAIAAAcgABQg3IAAgbIBNAAIAAAbgABQhlIAAgbIBNAAIAAAbgAglhlIAAgbIBKAAIAAAbgAichlIAAgbIBMAAIAAAbg");
	this.shape_25.setTransform(59,41.3);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#333333").s().p("ACMCwIAAgbIBNAAIAAAbgAAUCwIAAgbIBNAAIAAAbgAhhCwIAAgbIBMAAIAAAbgAjYCwIAAgbIBMAAIAAAbgACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgcIBNAAIAAAcgAAUBTIAAgcIBNAAIAAAcgAhhBTIAAgcIBMAAIAAAcgAjYBTIAAgcIBMAAIAAAcgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgbIBNAAIAAAbgAjYgIIAAgbIBMAAIAAAbgACMg2IAAgcIBNAAIAAAcgAjYg2IAAgcIBMAAIAAAcgACMhlIAAgbIBNAAIAAAbgACMiUIAAgbIBNAAIAAAbg");
	this.shape_26.setTransform(65,45.9);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#CCCCCC").s().p("ABQBTIAAgbIBNAAIAAAbgAglBTIAAgbIBKAAIAAAbgABQAlIAAgcIBNAAIAAAcgAglAlIAAgcIBKAAIAAAcgABQgIIAAgbIBNAAIAAAbgAglgIIAAgbIBKAAIAAAbgAicgIIAAgbIBMAAIAAAbgABQg3IAAgbIBNAAIAAAbgAglg3IAAgbIBKAAIAAAbgAicg3IAAgbIBMAAIAAAbg");
	this.shape_27.setTransform(59,36.6);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#333333").s().p("ACMCZIAAgcIBNAAIAAAcgAAUCZIAAgcIBNAAIAAAcgAhhCZIAAgcIBMAAIAAAcgAjYCZIAAgcIBMAAIAAAcgACMBqIAAgbIBNAAIAAAbgAAUBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgAjYBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAAUANIAAgZIBNAAIAAAZgAjYANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAAUgfIAAgcIBNAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAjYhOIAAgbIBMAAIAAAbgAjYh8IAAgcIBMAAIAAAcg");
	this.shape_28.setTransform(65,48.2);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#CCCCCC").s().p("AhhBqIAAgbIBMAAIAAAbgAhhA8IAAgcIBMAAIAAAcgAhhANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAAUgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbgAjYhOIAAgbIBMAAIAAAbg");
	this.shape_29.setTransform(65,38.9);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#333333").s().p("ACMCwIAAgbIBNAAIAAAbgAAUCwIAAgbIBNAAIAAAbgAhhCwIAAgbIBMAAIAAAbgAjYCwIAAgbIBMAAIAAAbgACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgcIBNAAIAAAcgAAUBTIAAgcIBNAAIAAAcgAhhBTIAAgcIBMAAIAAAcgAjYBTIAAgcIBMAAIAAAcgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgbIBNAAIAAAbgAAUgIIAAgbIBNAAIAAAbgAjYgIIAAgbIBMAAIAAAbgACMg2IAAgcIBNAAIAAAcgAAUg2IAAgcIBNAAIAAAcgAjYg2IAAgcIBMAAIAAAcgAAUhlIAAgbIBNAAIAAAbgAjYhlIAAgbIBMAAIAAAbgAAUiUIAAgbIBNAAIAAAbgAjYiUIAAgbIBMAAIAAAbg");
	this.shape_30.setTransform(65,45.9);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#CCCCCC").s().p("AidBqIAAgbIBNAAIAAAbgAidA8IAAgcIBNAAIAAAcgAidANIAAgZIBNAAIAAAZgABRgfIAAgcIBMAAIAAAcgAidgfIAAgcIBNAAIAAAcgABRhOIAAgbIBMAAIAAAbgAidhOIAAgbIBNAAIAAAbg");
	this.shape_31.setTransform(70.9,38.9);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#333333").s().p("ACMCZIAAgcIBNAAIAAAcgAAUCZIAAgcIBNAAIAAAcgAhhCZIAAgcIBMAAIAAAcgAjYCZIAAgcIBMAAIAAAcgACMBqIAAgbIBNAAIAAAbgAAUBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgAjYBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAAUANIAAgZIBNAAIAAAZgAjYANIAAgZIBMAAIAAAZgAAUgfIAAgcIBNAAIAAAcgAjYgfIAAgcIBMAAIAAAcgAAUhOIAAgbIBNAAIAAAbgAjYhOIAAgbIBMAAIAAAbgAAUh8IAAgcIBNAAIAAAcg");
	this.shape_32.setTransform(65,48.2);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#CCCCCC").s().p("AhhBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbgAjYhOIAAgbIBMAAIAAAbg");
	this.shape_33.setTransform(65,38.9);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#333333").s().p("ACMCwIAAgbIBNAAIAAAbgAAUCwIAAgbIBNAAIAAAbgAhhCwIAAgbIBMAAIAAAbgAjYCwIAAgbIBMAAIAAAbgACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgcIBNAAIAAAcgAAUBTIAAgcIBNAAIAAAcgAhhBTIAAgcIBMAAIAAAcgAjYBTIAAgcIBMAAIAAAcgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgAAUgIIAAgbIBNAAIAAAbgAhhgIIAAgbIBMAAIAAAbgAAUg2IAAgcIBNAAIAAAcgAAUhlIAAgbIBNAAIAAAbgAAUiUIAAgbIBNAAIAAAbg");
	this.shape_34.setTransform(65,45.9);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#CCCCCC").s().p("ACMBqIAAgbIBNAAIAAAbgACMA8IAAgcIBNAAIAAAcgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgAjYANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbgAjYhOIAAgbIBMAAIAAAbg");
	this.shape_35.setTransform(65,38.9);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#333333").s().p("ACMCZIAAgcIBNAAIAAAcgAAUCZIAAgcIBNAAIAAAcgAhhCZIAAgcIBMAAIAAAcgAjYCZIAAgcIBMAAIAAAcgACMBqIAAgbIBNAAIAAAbgAAUBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgAjYBqIAAgbIBMAAIAAAbgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAAUANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgAAUgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgAAUhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbgAAUh8IAAgcIBNAAIAAAcg");
	this.shape_36.setTransform(65,48.2);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#CCCCCC").s().p("ACMCCIAAgcIBNAAIAAAcgAjYCCIAAgcIBMAAIAAAcgACMBTIAAgbIBNAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAkIAAgbIBNAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgcIBNAAIAAAcgAjYgIIAAgcIBMAAIAAAcgACMg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgACMhlIAAgbIBNAAIAAAbgAAUhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbg");
	this.shape_37.setTransform(65,41.3);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#333333").s().p("ACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgbIBNAAIAAAbgAAUBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgACMAlIAAgcIBNAAIAAAcgAAUAlIAAgcIBNAAIAAAcgAhhAlIAAgcIBMAAIAAAcgACMgIIAAgbIBNAAIAAAbgAAUgIIAAgbIBNAAIAAAbgAhhgIIAAgbIBMAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAAUhlIAAgcIBNAAIAAAcg");
	this.shape_38.setTransform(65,50.6);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#CCCCCC").s().p("AjYCZIAAgcIBMAAIAAAcgAjYBqIAAgbIBMAAIAAAbgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAjYANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbgAjYhOIAAgbIBMAAIAAAbgACMh8IAAgcIBNAAIAAAcgAAUh8IAAgcIBNAAIAAAcgAhhh8IAAgcIBMAAIAAAcgAjYh8IAAgcIBMAAIAAAcg");
	this.shape_39.setTransform(65,43.6);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#333333").s().p("ACMBqIAAgbIBNAAIAAAbgAAUBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgAjYBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAAUANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgAjYANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAAUgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbg");
	this.shape_40.setTransform(65,52.9);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#CCCCCC").s().p("AjYBqIAAgbIBMAAIAAAbgAAUA8IAAgcIBNAAIAAAcgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAAUANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgAjYANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAAUgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbgAjYhOIAAgbIBMAAIAAAbg");
	this.shape_41.setTransform(65,38.9);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#333333").s().p("ACMCBIAAgbIBNAAIAAAbgAAUCBIAAgbIBNAAIAAAbgAhhCBIAAgbIBMAAIAAAbgAjYCBIAAgbIBMAAIAAAbgACMBTIAAgbIBNAAIAAAbgAAUBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAlIAAgcIBNAAIAAAcgAhhAlIAAgcIBMAAIAAAcgAjYAlIAAgcIBMAAIAAAcgACMgIIAAgbIBNAAIAAAbgAhhgIIAAgbIBMAAIAAAbgAjYgIIAAgbIBMAAIAAAbgACMg3IAAgbIBNAAIAAAbgACMhlIAAgcIBNAAIAAAcg");
	this.shape_42.setTransform(65,50.6);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#CCCCCC").s().p("AAUCCIAAgcIBNAAIAAAcgAAUBTIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgAAUgIIAAgcIBNAAIAAAcgAhhgIIAAgcIBMAAIAAAcgAjYgIIAAgcIBMAAIAAAcgACMg3IAAgbIBNAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgACMhlIAAgbIBNAAIAAAbgAAUhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbg");
	this.shape_43.setTransform(65,41.3);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#333333").s().p("ACMCZIAAgcIBNAAIAAAcgAAUCZIAAgcIBNAAIAAAcgAhhCZIAAgcIBMAAIAAAcgAjYCZIAAgcIBMAAIAAAcgACMBqIAAgbIBNAAIAAAbgAAUBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgAjYBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgAjYANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAjYhOIAAgbIBMAAIAAAbgACMh8IAAgcIBNAAIAAAcg");
	this.shape_44.setTransform(65,48.2);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#CCCCCC").s().p("AAUBqIAAgbIBNAAIAAAbgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAAUANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgAAUgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbgAjYhOIAAgbIBMAAIAAAbg");
	this.shape_45.setTransform(65,38.9);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#333333").s().p("ACMCZIAAgcIBNAAIAAAcgAAUCZIAAgcIBNAAIAAAcgAhhCZIAAgcIBMAAIAAAcgAjYCZIAAgcIBMAAIAAAcgACMBqIAAgbIBNAAIAAAbgAAUBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgAjYBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAAUANIAAgZIBNAAIAAAZgAjYANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAjYhOIAAgbIBMAAIAAAbgAjYh8IAAgcIBMAAIAAAcg");
	this.shape_46.setTransform(65,48.2);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#CCCCCC").s().p("AhhBqIAAgbIBMAAIAAAbgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAAUANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAAUgfIAAgcIBNAAIAAAcgAhhgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAhhhOIAAgbIBMAAIAAAbgAjYhOIAAgbIBMAAIAAAbg");
	this.shape_47.setTransform(65,38.9);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#333333").s().p("ACMBqIAAgbIBNAAIAAAbgAAUBqIAAgbIBNAAIAAAbgAhhBqIAAgbIBMAAIAAAbgAjYBqIAAgbIBMAAIAAAbgACMA8IAAgcIBNAAIAAAcgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAAUANIAAgZIBNAAIAAAZgAjYANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAAUgfIAAgcIBNAAIAAAcgAjYgfIAAgcIBMAAIAAAcgACMhOIAAgbIBNAAIAAAbgAAUhOIAAgbIBNAAIAAAbgAjYhOIAAgbIBMAAIAAAbg");
	this.shape_48.setTransform(65,52.9);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#CCCCCC").s().p("AhhCCIAAgcIBMAAIAAAcgAhhBTIAAgbIBMAAIAAAbgAhhAkIAAgbIBMAAIAAAbgACMgIIAAgcIBNAAIAAAcgAAUgIIAAgcIBNAAIAAAcgAhhgIIAAgcIBMAAIAAAcgAjYgIIAAgcIBMAAIAAAcgACMg3IAAgbIBNAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgACMhlIAAgbIBNAAIAAAbgAAUhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbg");
	this.shape_49.setTransform(65,41.3);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#333333").s().p("ACMA8IAAgcIBNAAIAAAcgAAUA8IAAgcIBNAAIAAAcgAhhA8IAAgcIBMAAIAAAcgAjYA8IAAgcIBMAAIAAAcgACMANIAAgZIBNAAIAAAZgAAUANIAAgZIBNAAIAAAZgAhhANIAAgZIBMAAIAAAZgAjYANIAAgZIBMAAIAAAZgACMgfIAAgcIBNAAIAAAcgAAUgfIAAgcIBNAAIAAAcgAjYgfIAAgcIBMAAIAAAcg");
	this.shape_50.setTransform(65,57.5);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#CCCCCC").s().p("AhhCCIAAgcIBMAAIAAAcgACMBTIAAgbIBNAAIAAAbgAAUBTIAAgbIBNAAIAAAbgAhhBTIAAgbIBMAAIAAAbgAjYBTIAAgbIBMAAIAAAbgACMAkIAAgbIBNAAIAAAbgAAUAkIAAgbIBNAAIAAAbgAhhAkIAAgbIBMAAIAAAbgAjYAkIAAgbIBMAAIAAAbgACMgIIAAgcIBNAAIAAAcgAAUgIIAAgcIBNAAIAAAcgAhhgIIAAgcIBMAAIAAAcgAjYgIIAAgcIBMAAIAAAcgACMg3IAAgbIBNAAIAAAbgAAUg3IAAgbIBNAAIAAAbgAhhg3IAAgbIBMAAIAAAbgAjYg3IAAgbIBMAAIAAAbgACMhlIAAgbIBNAAIAAAbgAAUhlIAAgbIBNAAIAAAbgAhhhlIAAgbIBMAAIAAAbgAjYhlIAAgbIBMAAIAAAbg");
	this.shape_51.setTransform(65,41.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).to({state:[{t:this.shape_3},{t:this.shape_2}]},1).to({state:[{t:this.shape_5},{t:this.shape_4}]},1).to({state:[{t:this.shape_7},{t:this.shape_6}]},1).to({state:[{t:this.shape_9},{t:this.shape_8}]},1).to({state:[{t:this.shape_11},{t:this.shape_10}]},1).to({state:[{t:this.shape_13},{t:this.shape_12}]},1).to({state:[{t:this.shape_15},{t:this.shape_14}]},1).to({state:[{t:this.shape_17},{t:this.shape_16}]},1).to({state:[{t:this.shape_19},{t:this.shape_18}]},1).to({state:[{t:this.shape_21},{t:this.shape_20}]},1).to({state:[{t:this.shape_23},{t:this.shape_22}]},1).to({state:[{t:this.shape_25},{t:this.shape_24}]},1).to({state:[{t:this.shape_27},{t:this.shape_26}]},1).to({state:[{t:this.shape_29},{t:this.shape_28}]},1).to({state:[{t:this.shape_31},{t:this.shape_30}]},1).to({state:[{t:this.shape_33},{t:this.shape_32}]},1).to({state:[{t:this.shape_35},{t:this.shape_34}]},1).to({state:[{t:this.shape_37},{t:this.shape_36}]},1).to({state:[{t:this.shape_39},{t:this.shape_38}]},1).to({state:[{t:this.shape_41},{t:this.shape_40}]},1).to({state:[{t:this.shape_43},{t:this.shape_42}]},1).to({state:[{t:this.shape_45},{t:this.shape_44}]},1).to({state:[{t:this.shape_47},{t:this.shape_46}]},1).to({state:[{t:this.shape_49},{t:this.shape_48}]},1).to({state:[{t:this.shape_51},{t:this.shape_50}]},1).to({state:[{t:this.shape_1},{t:this.shape}]},1).wait(1));

	// Camada 1
	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#333333").s().p("AnYFOIAAqbIOxAAIAAKbgAmpEdINTAAIAAo5ItTAAg");
	this.shape_52.setTransform(65,45.9);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#FFFFFF").s().p("AmpEdIAAo5INTAAIAAI5g");
	this.shape_53.setTransform(65,45.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_53},{t:this.shape_52}]}).wait(27));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(17.6,12.5,94.8,66.9);


// stage content:
(lib.upload_musica_concorrente = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// picutre
	this.instance = new lib.picutre();
	this.instance.setTransform(134.3,130.7,1.053,1,0,0,18.2,65,45.9);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({y:130.4},0).wait(1).to({y:129.5},0).wait(1).to({y:127.7},0).wait(1).to({y:125},0).wait(1).to({y:120.9},0).wait(1).to({y:115},0).wait(1).to({y:106.6},0).wait(1).to({y:94.3},0).wait(1).to({y:76},0).wait(1).to({y:50.5},0).wait(1).to({y:23.4},0).wait(1).to({y:2.3},0).wait(1).to({y:-12.5},0).wait(1).to({y:-23.2},0).wait(1).to({y:-31.1},0).wait(1).to({y:-37},0).wait(1).to({y:-41.4},0).wait(1).to({y:-44.7},0).wait(1).to({y:-47.2},0).wait(1).to({y:-48.9},0).wait(1).to({y:-50},0).wait(1).to({y:-50.7},0).wait(1).to({y:-50.9},0).wait(38));

	// picutre
	this.instance_1 = new lib.picutre();
	this.instance_1.setTransform(154.3,117.3,1.053,1,0,0,18.2,65,45.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(6).to({x:154.2},0).wait(1).to({x:154.1,y:117.4},0).wait(1).to({x:153.9,y:117.5},0).wait(1).to({x:153.6,y:117.7},0).wait(1).to({x:153.2,y:118},0).wait(1).to({x:152.5,y:118.5},0).wait(1).to({x:151.6,y:119.1},0).wait(1).to({x:150.2,y:120},0).wait(1).to({x:148.2,y:121.4},0).wait(1).to({x:145.4,y:123.2},0).wait(1).to({x:142.4,y:125.3},0).wait(1).to({x:140.1,y:126.8},0).wait(1).to({x:138.5,y:127.9},0).wait(1).to({x:137.3,y:128.7},0).wait(1).to({x:136.4,y:129.3},0).wait(1).to({x:135.8,y:129.7},0).wait(1).to({x:135.3,y:130.1},0).wait(1).to({x:134.9,y:130.3},0).wait(1).to({x:134.7,y:130.5},0).wait(1).to({x:134.5,y:130.6},0).wait(1).to({x:134.3,y:130.7},0).wait(35));

	// picutre
	this.instance_2 = new lib.picutre();
	this.instance_2.setTransform(174.3,103.9,1.053,1,0,0,18.2,65,45.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(11).to({x:174.2},0).wait(1).to({x:174.1},0).wait(1).to({x:173.9,y:104.1},0).wait(1).to({x:173.6,y:104.3},0).wait(1).to({x:173.2,y:104.6},0).wait(1).to({x:172.5,y:105},0).wait(1).to({x:171.6,y:105.6},0).wait(1).to({x:170.2,y:106.5},0).wait(1).to({x:168.2,y:107.9},0).wait(1).to({x:165.4,y:109.8},0).wait(1).to({x:162.4,y:111.8},0).wait(1).to({x:160.1,y:113.3},0).wait(1).to({x:158.5,y:114.4},0).wait(1).to({x:157.3,y:115.2},0).wait(1).to({x:156.4,y:115.8},0).wait(1).to({x:155.8,y:116.2},0).wait(1).to({x:155.3,y:116.6},0).wait(1).to({x:154.9,y:116.8},0).wait(1).to({x:154.7,y:117},0).wait(1).to({x:154.5,y:117.1},0).wait(1).to({x:154.3,y:117.2},0).wait(2).to({y:117.3},0).wait(28));

	// picutre
	this.instance_3 = new lib.picutre();
	this.instance_3.setTransform(194.3,90.5,1.053,1,0,0,18.2,65,45.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(16).to({x:194.2},0).wait(1).to({x:194.1},0).wait(1).to({x:193.9,y:90.7},0).wait(1).to({x:193.6,y:90.9},0).wait(1).to({x:193.2,y:91.2},0).wait(1).to({x:192.5,y:91.6},0).wait(1).to({x:191.6,y:92.2},0).wait(1).to({x:190.2,y:93.1},0).wait(1).to({x:188.2,y:94.5},0).wait(1).to({x:185.4,y:96.4},0).wait(1).to({x:182.4,y:98.4},0).wait(1).to({x:180.1,y:100},0).wait(1).to({x:178.5,y:101.1},0).wait(1).to({x:177.3,y:101.9},0).wait(1).to({x:176.4,y:102.4},0).wait(1).to({x:175.8,y:102.9},0).wait(1).to({x:175.3,y:103.2},0).wait(1).to({x:174.9,y:103.4},0).wait(1).to({x:174.7,y:103.6},0).wait(1).to({x:174.5,y:103.8},0).wait(1).to({x:174.3},0).wait(1).to({y:103.9},0).wait(24));

	// picutre
	this.instance_4 = new lib.picutre();
	this.instance_4.setTransform(214.3,77,1.053,1,0,0,18.2,65,45.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(21).to({x:214.2},0).wait(1).to({x:214.1,y:77.1},0).wait(1).to({x:213.9,y:77.2},0).wait(1).to({x:213.6,y:77.4},0).wait(1).to({x:213.2,y:77.7},0).wait(1).to({x:212.5,y:78.2},0).wait(1).to({x:211.6,y:78.8},0).wait(1).to({x:210.2,y:79.7},0).wait(1).to({x:208.2,y:81},0).wait(1).to({x:205.4,y:82.9},0).wait(1).to({x:202.4,y:84.9},0).wait(1).to({x:200.1,y:86.5},0).wait(1).to({x:198.5,y:87.6},0).wait(1).to({x:197.3,y:88.4},0).wait(1).to({x:196.4,y:88.9},0).wait(1).to({x:195.8,y:89.4},0).wait(1).to({x:195.3,y:89.7},0).wait(1).to({x:194.9,y:89.9},0).wait(1).to({x:194.7,y:90.1},0).wait(1).to({x:194.5,y:90.3},0).wait(1).to({x:194.3},0).wait(1).to({y:90.4},0).wait(1).to({y:90.5},0).wait(18));

	// picutre
	this.instance_5 = new lib.picutre();
	this.instance_5.setTransform(234.3,63.6,1.053,1,0,0,18.2,65,45.9);
	this.instance_5.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(26).to({x:234.2,y:63.7,alpha:0.002},0).wait(1).to({x:234.1,alpha:0.007},0).wait(1).to({x:233.9,y:63.9,alpha:0.016},0).wait(1).to({x:233.6,y:64.1,alpha:0.031},0).wait(1).to({x:233.2,y:64.4,alpha:0.054},0).wait(1).to({x:232.5,y:64.8,alpha:0.086},0).wait(1).to({x:231.6,y:65.4,alpha:0.133},0).wait(1).to({x:230.2,y:66.3,alpha:0.201},0).wait(1).to({x:228.2,y:67.7,alpha:0.301},0).wait(1).to({x:225.4,y:69.5,alpha:0.442},0).wait(1).to({x:222.4,y:71.6,alpha:0.591},0).wait(1).to({x:220.1,y:73.1,alpha:0.707},0).wait(1).to({x:218.5,y:74.2,alpha:0.789},0).wait(1).to({x:217.3,y:75,alpha:0.848},0).wait(1).to({x:216.4,y:75.6,alpha:0.891},0).wait(1).to({x:215.8,y:76,alpha:0.923},0).wait(1).to({x:215.3,y:76.4,alpha:0.948},0).wait(1).to({x:214.9,y:76.6,alpha:0.966},0).wait(1).to({x:214.7,y:76.8,alpha:0.98},0).wait(1).to({x:214.5,y:76.9,alpha:0.989},0).wait(1).to({x:214.3,y:77,alpha:0.995},0).wait(1).to({alpha:0.999},0).wait(1).to({alpha:1},0).wait(13));

	// Camada 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#CCCCCC").s().p("A8lQeMAAAgg8MA5LAAAMAAAAg8g");
	this.shape.setTransform(183,105.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(61));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(183,105.5,366,211);

})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{});
var lib, images, createjs, ss;