package funcs

// returning the count of a string's runes

func Strlen0(s string) int {
	return len(s)
}

func Strlen1(s string) int {
	count := 0
	for range s {
		count++
	}
	return count
}

func Strlen2(s string) int {
	count := 0
	for i := 0; i < len(s); i++ {
		count++
	}
	return count
}

// swaping the content (DV) of two pointers

func Swap0(a, b *int) (int, int) {
	*a, *b = *b, *a
	return *a, *b
} // Go parallel, multi-assignment feature

func Swap1(a, b *int) (int, int) {
	temp := *a
	*a = *b
	*b = temp
	return *a, *b
}

// function to return a sting in reverse

func StrRev0(s string) string {
	runes := []rune(s)
	length := len(runes)
	for i := 0; i < length/2; i++ {
		runes[i], runes[length-i-1] = runes[length-i-1], runes[i]
	}
	return string(runes)
}

func StrRev1(str string) string {
	runes := []rune(str)
	length := len(runes)
	for i, j := 0, length-1; i < j; i, j = i+1, j-1 {
		runes[i], runes[j] = runes[j], runes[i]
	}
	return string(runes)
}
