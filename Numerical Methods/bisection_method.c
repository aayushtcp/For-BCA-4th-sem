#include <stdio.h>
#include <math.h>

double func(double x) {
    return cos(x) - x * exp(x);
}

double bisection(double a, double b, double tol) {
    double c;
    while ((b - a) >= tol) {
        c = (a + b) / 2;

        if (func(c) == 0.0)
            break;
        else if (func(c) * func(a) < 0)
            b = c;
        else
            a = c;
    }
    return c;
}

int main() {
    double a = 1, b = 3;
    double tol = 0.0001;
    printf("Root: %lf\n", bisection(a, b, tol));
    return 0;
}