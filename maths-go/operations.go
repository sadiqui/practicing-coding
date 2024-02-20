package main

import "fmt"

func operations(x, y float64) (float64, float64, float64, float64, error) {
	if y == 0 {
		return 0, 0, 0, 0, fmt.Errorf("division by zero!")
	}
	sum := x + y
	dif := x - y
	pro := x * y
	quo := x / y
	return sum, dif, pro, quo, nil
}

func main() {
	a, b := 10, 2
	sum1, dif1, pro1, quo1, err1 := operations(float64(a), float64(b))
	if err1 != nil {
		fmt.Println("Error:", err1)
	} else {
		fmt.Println("Arithmetic Results")
		fmt.Println("Sum:", sum1)
		fmt.Println("Difference:", dif1)
		fmt.Println("Product:", pro1)
		fmt.Println("Quotient:", quo1)
	}

	A, B := 10.0, 0.0
	sum2, dif2, pro2, quo2, err2 := operations(float64(A), float64(B))
	if err2 != nil {
		fmt.Println("Error:", err2)
	} else {
		fmt.Println("Arithmetic Results")
		fmt.Println("Sum:", sum2)
		fmt.Println("Difference:", dif2)
		fmt.Println("Product:", pro2)
		fmt.Println("Quotient:", quo2)
	}
}
