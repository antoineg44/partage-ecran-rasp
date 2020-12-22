#include <stdlib.h>
#include <sys/types.h>
#include <unistd.h>

int main() {
   setuid(0); // for uid to be 0, root 
   system("vcgencmd display_power 1");
   return 0;
}
