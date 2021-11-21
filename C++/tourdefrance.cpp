//https://open.kattis.com/problems/tourdefrance
//Running Time: 0.00s

#include <cstdio>
#include <algorithm>
using namespace std;

int main() {
    int front;
    int rear;
    int fVelocity[10];
    int rVelocity[10];
    double ratio[100];

    while (scanf("%d",&front), front) {
      scanf("%d", &rear);
      for (int i = 0; i < front; i++) {
          scanf("%d", &fVelocity[i]);
      }
      for (int j = 0; j < rear; j++) {
          scanf("%d", &rVelocity[j]);
      }
      int o = 0;
      for (int m = 0; m < rear; m++) {
          for (int n = 0; n < front; n++) {
              ratio[o] = (double) rVelocity[m] / (double) fVelocity[n];
              o++;
          }
      }
      sort(ratio, ratio + o);
      double spread = -1;
      for (int p = 0; p < o - 1; p++) {
          spread = max(spread,ratio[p] + 1] / ratio[p]);
      }
      printf("%.2lf\n",spread);
    }
    
    return 0;
    
}
