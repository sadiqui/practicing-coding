package main

import "fmt"

func operations(x, y float64) (float64, float64, float64, float64, error) {
	sum := x + y
	dif := x - y
	pro := x * y
	quo := x / y
	if y == 0 {
		return sum, dif, pro, quo, fmt.Errorf("division by zero!")
	}
	return sum, dif, pro, quo, nil
}

func main() {
	a, b := 10, 2
	sum1, dif1, pro1, quo1, err1 := operations(float64(a), float64(b))
	fmt.Println("Arithmetic Results")
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
	sum2, dif2, pro2, quo2, err2 := operations(A, B)
	fmt.Println("Arithmetic Results")
	fmt.Println("Sum:", sum2)
	fmt.Println("Difference:", dif2)
	fmt.Println("Product:", pro2)
	if err2 == nil {
		fmt.Println("Quotient:", quo2)
	} else {
		fmt.Println("Quotient: error,", err2)
	}
}

// Arithmetic Results
// Sum: 12
// Difference: 8
// Product: 20
// Quotient: 5

// Arithmetic Results
// Sum: 10
// Difference: 10
// Product: 0
// Quotient: error, division by zero!
