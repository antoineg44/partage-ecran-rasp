#include <stdlib.h>
#include <sys/types.h>
#include <unistd.h>

int main() {
   setuid(0); // for uid to be 0, root
   system("pkill -f 'chromium-browser-v7'");
   return 0;
}
