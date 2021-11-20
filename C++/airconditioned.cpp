//https://open.kattis.com/problems/airconditioned
//Running Time: 0.01s
#include <bits/stdc++.h>
using namespace std;
 
#define pb push_back
 
int N;
vector <int> arr[201];
 
int main()
{
    scanf("%d", &N);
    for (int i=1;i<=N;i++){
        int a, b;
        scanf("%d%d", &a, &b);
        arr[a].pb(b);
    }
    int mn = 2e9, ans = 0;
    for (int i=1;i<=N+N;i++){
        if (mn < i) ans++, mn = 2e9;
        for (int e: arr[i]) mn = min(mn, e);
    }
    if (mn < 2e9) ans++;
    printf("%d\n", ans);
}
