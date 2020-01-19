

# The powers of 2,3,… (except 10) are fruitful.
If we take 10 digit and construct  exactly 3-digit string (digits may repeat) we will have 1000 different strings (‘000’, ‘001’, … ‘999’).

And it’s interesting each of these strings “abc” (a,b,c in 0…9) has a min power T so that 2^T=….abc…. (i.e “abc” is substring of 2^T):
“000”  (aka ‘aaa’) is substring of 2^242.
”001” (aka ‘aab’) is subs of 2^89.
…
”999” is subs of 2^50.  (2^50 = 1125899906842624)

The min power T of 2 so that for every 3-string ‘abc’  (a,b,c in range 0…9) exists n<=T such that "abc" is substring of 2^n is 242.

 
**for 1-string minimum power T = 15;**  
**for 2-string  T = 66;**  
**for 3-string  T = ;**  
**for any 4-string “xxxx”  (x in range 0…9) we can find min power T so that exists n<=t such that ‘xxxx” is substring of 2^n. Here T = 809.**   
So, for any 5-string “xxxxx” (10^5  possibilities), T = 2750.

and so on. 
	
## Hence, first five terms are:  15, 66, , 809, 2750.

## Where to use it?  For what is this? 

If we take base = 29* and find a(130000)=T we get Shakespeare's Hamlet (let's say this text consists 130K symbols) which is a substring of some power k<=T of **immense number 2^T** (in base 29).  
___
* (for 26 letters and 27th for point-mark 28th for the space-mark and 29th for exclamation mart) we can see )) 

 
Here you'll find two .php files: **functions.php** and **hamlet-as-subsring.php**. If you are patient you'll find "to be" as substring in the  12433 iteration.

_Why PHP_? Thanks to good function base_convert() :))  
P.S. ** Please, do not forget to change in your php.ini **_max_execution_time_** to 5000.**
