#include <stdlib.h>
#include <sys/types.h>
#include <unistd.h>

int main() {
   setuid(0); // for uid to be 0, root 
   execl("/sbin/poweroff", "poweroff", NULL, NULL);
   return 0;
}
