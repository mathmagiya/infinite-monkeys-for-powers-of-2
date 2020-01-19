

#The powers of 2,3,… (except 10) are fruitful.
If we take 10 digit and construct  exactly 3-digit string (digits may repeat) we will have 10^3 different strings (‘000’, ‘001’, … ‘999’).

And it’s interesting each of these strings “abc” (a,b,c in 0…9) has a min power t so that 2^t=….abc…. (i.e “abc” is substring of 2^t):
“000”  (aka ‘aaa’) is substring of 2^242.
”001” (aka ‘aab’) is subs of 2^89.
…
”999” is subs of 2^50.  (2^50 = 1125899906842624)

The min power T of 2 so that for every 3-string ‘abc’  (a,b,c in range 0…9) exists n<=T such that ‘abc” is substring of 2^n is 242.

 
**for 1-string minimum power T = 15;**
**for 2-string  T = 66;**
**for 3-string  T = ;**
for any 4-string “xxxx”  (x in range 0…9) we can find min power t so that exists n<=t such that ‘xxxx” is substring of 2^n. Here t = 809.
So, for any 5-string “xxxxx” (10^5  possibilities), T = 2750.

and so on. 
	
#Hence, first four terms are:  15, 66, ,2750 #

 ##Where to use it?  For what is this? ##






Most likely this chef-d'oeuvre will appear for some power less than value of a(130000).
