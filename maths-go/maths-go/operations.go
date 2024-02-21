package main

import "fmt"

func returnmath(x, y float64) (float64, float64, float64, float64, error) {
	sum := x + y
	dif := x - y
	pro := x * y
	quo := x / y
	if y == 0 {
		return sum, dif, pro, quo, fmt.Errorf("division by zero!")
	}
	return sum, dif, pro, quo, nil
}

func printmath(x, y float64) {
	sum := x + y
	dif := x - y
	pro := x * y
	quo := x / y
	err := "division by zero!"
	fmt.Println("Results of", x, "&", y)
	fmt.Println("Sum:", sum)
	fmt.Println("Difference:", dif)
	fmt.Println("Product:", pro)
	if y != 0 {
		fmt.Println("Quotient:", quo)
	} else {
		fmt.Println("Quotient:", err)
	}
}

func main() {
	a, b := 10, 2
	sum1, dif1, pro1, quo1, err1 := returnmath(float64(a), float64(b))
	fmt.Println("Results of", a, "&", b)
	fmt.Println("Sum:", sum1)
	fmt.Println("Difference:", dif1)
	fmt.Println("Product:", pro1)
	if err1 == nil {
		fmt.Println("Quotient:", quo1)
	} else {
		fmt.Println("Quotient: error,", err1)
	}

	fmt.Println()

	A, B := 10.0, 0.0
	sum2, dif2, pro2, quo2, err2 := returnmath(A, B)
	fmt.Println("Results of", A, "&", B)
	fmt.Println("Sum:", sum2)
	fmt.Println("Difference:", dif2)
	fmt.Println("Product:", pro2)
	if err2 == nil {
		fmt.Println("Quotient:", quo2)
	} else {
		fmt.Println("Quotient:", err2)
	}

	fmt.Println()
	printmath(15.0, 3.0)

	fmt.Println()
	printmath(float64(15), float64(0))
}

// Results of 10 & 2
// Sum: 12
// Difference: 8
// Product: 20
// Quotient: 5

// Results of 10 & 0
// Sum: 10
// Difference: 10
// Product: 0
// Quotient: division by zero!

// Results of 15 & 3
// Sum: 18
// Difference: 12
// Product: 45
// Quotient: 5

// Results of 15 & 0
// Sum: 15
// Difference: 15
// Product: 0
// Quotient: division by zero!
