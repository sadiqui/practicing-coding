package funcs

import "fmt"

// calculate & handling errors

func Returnmath(x, y float64) (float64, float64, float64, float64, error) {
	sum, dif, pro := x+y, x-y, x*y

	if y == 0 {
		return sum, dif, pro, 0, fmt.Errorf("division by zero!")
	}
	return sum, dif, pro, x / y, nil
}

func Printmath(x, y float64) {
	sum, dif, pro, quo, err := Returnmath(x, y)

	fmt.Println("Results of", x, "&", y)
	fmt.Println("Sum:", sum)
	fmt.Println("Difference:", dif)
	fmt.Println("Product:", pro)

	if err != nil {
		fmt.Println("Error:", err)
	} else {
		fmt.Println("Quotient:", quo)
	}

	fmt.Println()
}
