#include <stdio.h>
#include <math.h>

#define NX 5
#define NY 5
#define MAX_ITER 10000
#define TOLERANCE 1e-5

void initialize(double phi[][NY+2]);
void solve_poisson(double phi[][NY+2], double rho[][NY+2]);

int main() {
    double phi[NX+2][NY+2];
    double rho[NX+2][NY+2];

    initialize(phi);

    for (int i = 1; i <= NX; i++) {
        for (int j = 1; j <= NY; j++) {
            rho[i][j] = 1.0;
        }
    }

    solve_poisson(phi, rho);

    // Print potential at selected grid points
    printf("Potential:\n");
    printf("%.2f %.2f %.2f\n", phi[1][1], phi[3][3], phi[5][5]);

    return 0;
}

void initialize(double phi[][NY+2]) {
    for (int i = 0; i <= NX+1; i++) {
        for (int j = 0; j <= NY+1; j++) {
            if (i == 0 || i == NX+1 || j == 0 || j == NY+1)
                phi[i][j] = 0.0;
            else
                phi[i][j] = 0.0;
        }
    }
}

void solve_poisson(double phi[][NY+2], double rho[][NY+2]) {
    double phi_old[NX+2][NY+2];
    double error;

    for (int iter = 0; iter < MAX_ITER; iter++) {
        for (int i = 0; i <= NX+1; i++) {
            for (int j = 0; j <= NY+1; j++) {
                phi_old[i][j] = phi[i][j];
            }
        }

        for (int i = 1; i <= NX; i++) {
            for (int j = 1; j <= NY; j++) {
                phi[i][j] = 0.25 * (phi_old[i+1][j] + phi_old[i-1][j] + phi_old[i][j+1] + phi_old[i][j-1] - rho[i][j]);
            }
        }

        error = 0.0;
        for (int i = 1; i <= NX; i++) {
            for (int j = 1; j <= NY; j++) {
                error += fabs(phi[i][j] - phi_old[i][j]);
            }
        }
        if (error < TOLERANCE) {
            printf("Converged after %d iterations.\n", iter+1);
            return;
        }
    }

    printf("Warning: Maximum iterations reached without convergence.\n");
}
