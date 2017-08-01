#include<iostream>
#include<algorithm>
#include<string>
using namespace std;
int main() {
int n;
cin>>n;
for(int i=0;i<n;i++)
{
	string s;
	cin>>s;
	int count1 =0;
	for(int j=0;j<s.length();j++)
	{
		if(s[j]=='s' && s[j+1]=='m' && s[j-1]!='m')
		{
		count1++;
	}
		else if(s[j]=='m'&& s[j+1]=='s' && s[j-1]!='s')
		{
		count1++;
	}
	}
		int c1=count(s.begin(),s.end(),'s');
       	int c2=count(s.begin(),s.end(),'m');
       	c1=c1-count1;
        if(c1==c2)
         cout<<"tie";
        else
        {
          c1>c2 ?cout<<"snakes":cout<<"mongooses";
        }
             c1=c2=count1=0;
       cout<<endl;
}
return 0;
}
