Charles Casey - CSCE 343
October 19, 2006
I did not like so few options
so this grammar has a ton with recursion
to make things interesting.

{
<start>
The <subject> <verb> <preposition>.;
Meanwhile, back at home the <subject> <verb> <preposition>.;
Somewhere <direction> of the <place>, <subject> <verb> <preposition>.;
A long time ago, <subject> <verb> <preposition>.;
Sometimes <subject> <verb> <preposition>.;
Just <direction> of here, <subject> <verb> <preposition>.;
}

{
<subject>
<-adjective>, <villains>;
<+adjective>, <heroes>;
<adjective>, <subject>;
}

{
<direction>
north;
east;
south;
west;
north-east;
north-west;
south-east;
south-west;
}

{
<preposition>
in the <place>;
through the <place>;
over the <place>;
for the <subject>;
<preposition> <preposition>;
}

{
<names>
<name> and <name>);
<name><multiple names>, and <name>);
}

{
<multiple names>
, <name><multiple names>;
, <name>;
}

{
<female names>
<female name> and <female name>);
<female name><female multiple names>, and <female name>);
}

{
<female multiple names>
, <female name><female multiple names>;
, <female name>;
}

{
<male names>
<male name> and <male name>);
<male name><male multiple names>, and <male name>);
}

{
<male multiple names>
, <male name><male multiple names>;
, <male name>;
}

{
<name>
<adjective>, <female name>;
<adjective>, <male name>;
<adjective>, <name>;
}

{
<male name>
<adjective> Francis;
<adjective> Billy;
<adjective> Adam;
<adjective> Bert;
<adjective> Albert;
<adjective> Link;
<adjective> Xing;
<adjective> Xiao;
<adjective> Basil;
<adjective> Jerome;
<adjective> Jerald;
<adjective> Jack;
<adjective> Stephan;
<adjective> Stephon;
<adjective> Bob;
<adjective> Bill;
<adjective> Wesley;
<adjective> Mr. Plumb;
<adjective> Robin;
<adjective> Pinklepurr;
<adjective> Peter;
<adjective> Kelly;
<adjective> Ashley;
<adjective>, <male name>;
}

{
<female name>
<adjective> Phyllis;
<adjective> Claire;
<adjective> Svea;
<adjective> Rosemary;
<adjective> Jonquil;
<adjective> Erica;
<adjective> Alexis;
<adjective> Wendy;
<adjective> Robin;
<adjective> Mrs. Periwinkle;
<adjective> Jill;
<adjective> Allison;
<adjective> Zelda;
<adjective> Phyllis;
<adjective> Ashley;
<adjective> Jennifer;
<adjective> Erin;
<adjective> Audrey;
<adjective> Melissa;
<adjective> Tammy;
<adjective> Maria;
<adjective> Harmony;
<adjective> Tru;
<adjective> Pearl;
<adjective> Kelly;
<adjective> Ashley;
<adjective>, <female name>;
}

{
<place>
<place adjective> plateau;
<place adjective> mountains;
<place adjective> hills;
<place adjective> plains;
<place adjective> beach;
<place adjective> forest;
<place adjective> swamp;
<place adjective> valley;
<place adjective> gorge;
<place adjective> woods;
<place adjective>, <place>;
}

{
<verb>
<adverb> hiked;
<adverb> rode;
<adverb> paraded;
<adverb> pillaged;
<adverb> explored;
<adverb> crawled;
<adverb> stumbled;
<adverb> skipped;
<adverb> marched;
<adverb> destroyed the <subject>;
<adverb> pursued the <subject>;
<adverb> captured the <subject>;
<adverb> subdued the <subject>;
<adverb> pacified the <subject>;
<adverb> built <multiple buildings>;
<adverb> destroyed <multiple buildings>;
<adverb>, <verb>;
}

{
<buildings>
castles;
forts;
barracks;
temples;
sacrificial pits;
ziggurats;
homes;
shacks;
traps;
Trojan horses;
monuments;
tombs;
}

{
<multiple buildings>
<buildings> and <buildings>;
<buildings>, <multiple buildings>;
}

{
<adverb>
quickly;
calmly;
frantically;
profitably;
slowly;
patiently;
silently;
sadly;
happily;
gracefully;
angrily;
enjoyably;
valiantly;
bravely;
swiftly;
recklessly;
cautiously;
}

{
<villains>
<nationality> wolves (<names>;
<nationality> inquisitions (<names>;
<nationality> sirens (<female names>;
<nationality> harpies (<female names>;
<nationality> pixies (<female names>;
<nationality> bandits (<names>;
<nationality> thieves (<names>;
<nationality> griffins (<names>;
<nationality> pirates (<names>;
<nationality> orcs (<names>;
<nationality> undead (<names>;
<nationality> minotaurs (<names>;
<nationality> centaurs (<names>;
}

{
<heroes>
<nationality> maidens (<female names>;
<nationality> kings (<male names>;
<nationality> knights (<male names>;
<nationality> dragons (<names>;
<nationality> dogs (<names>;
<nationality> samurai (<names>;
<nationality> archers (<names>;
<nationality> elves (<names>;
<nationality> dwarves (<names>;
<nationality> valkyries (<female names>;
<nationality> satyrs (<names>;
<nationality> fawns (<names>;
<nationality> fairies (<names>;
<nationality> nymphs (<female names>;
<nationality> dryads (<female names>;
}

{
<-adjective>
thieving;
cruel;
ugly;
gaudy;
wart hog faced;
yellow livered;
dumb;
stupid;
retarded;
weak;
smelly;
hairy;
sticky;
flatulent;
vain;
violent;
manipulative;
tricky;
cruel;
mangy;
treacherous;
}

{
<+adjective>
beautiful;
brave;
strong;
valiant;
kind;
gracious;
merciful;
sweet;
wonderful;
gentle;
powerful;
graceful;
mighty;
noble;
heroic;
soft;
silky;
tender;
supple;
}

{
<adjective>
<-adjective>;
<+adjective>;
fragrant;
well armored;
well armed;
poorly armed;
poorly armored;
clumsy;
deadly;
psychotic;
jolly;
jittery;
wise;
religious;
lazy;
quick;
swift;
nutty;
big;
strange;
spotted;
striped;
small;
scrawny;
alcoholic;
short;
ambitious;
fat;
frail;
skinny;
dramatic;
warm;
robust;
hot;
giggly;
cold;
rough;
tough;
wide-eyed;
sticky;
}

{
<place adjective>
<direction>ern;
fragrant;
deadly;
beautiful;
smelly;
warm;
hot;
cold;
rough;
treacherous;
sticky;
high;
low;
steep;
shallow;
dusty;
clear;
rocky;
smooth;
soft;
}

{
<nationality>
Spanish;
French;
Irish;
Portuguese;
British;
Indian;
Chinese;
Persian;
Brazilian;
Arabian;
German;
Scottish;
}
