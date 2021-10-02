#include <stdio.h>
#include <string.h>

#define HIDE(a) (a) + 0x50
#define UNHIDE(str) do { char * ptr = str ; while (*ptr) *ptr++ -= 0x50; } while(0)

int main(void) {

    char buffer[32];
    int wasRight = 0;

    printf("\n Enter the password to enter: \n");
    gets(buffer);

    char correctPassword[] = { HIDE('Q'), HIDE('e'), HIDE('b'), HIDE('n'), HIDE('n'), HIDE('n'), HIDE('n') };
    UNHIDE(correctPassword);

    if (strcmp(buffer, correctPassword)) {
        printf("\n Wrong \n");
    } else {
        printf("\n Yay! \n");
        wasRight = 1;
    }

    char fakeFlag[] = "T0AD{EnjOY_The_Red_HErring}";

    char flag[] = { HIDE('T'), HIDE('O'), HIDE('A'), HIDE('D'), HIDE('{'), HIDE('o'), HIDE('v'), HIDE('3'), HIDE('R'),
        HIDE('f'), HIDE('l'), HIDE('0'), HIDE('W'), HIDE('_'), HIDE('T'), HIDE('H'), HIDE('3'), HIDE('_'), HIDE('r'),
        HIDE('1'), HIDE('v'), HIDE('3'), HIDE('r'), HIDE('}') };
    UNHIDE(flag);

    if (wasRight) {
        printf("%s", flag);
    }

    return 0;
}