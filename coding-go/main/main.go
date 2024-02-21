package main

import (
	"fmt"

	"coding/funcs"
)

func main() {
	funcs.Printmath(10, 2)
	funcs.Printmath(10, 0)
	funcs.Printmath(15, 3)
	funcs.Printmath(13, 0)

	fmt.Println(funcs.Strlen0("clear"))
	fmt.Println(funcs.Strlen0("odd"))
	fmt.Println(funcs.Strlen0("even"))

	fmt.Println()

	a, b, c, d := 3, 0, 6, 9
	fmt.Println(funcs.Swap0(&a, &b))
	fmt.Println(funcs.Swap1(&c, &d))

	fmt.Println()

	fmt.Println(funcs.StrRev0("time"))
	fmt.Println(funcs.StrRev1("number"))
}
