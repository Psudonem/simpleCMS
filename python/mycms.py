import json
from datetime import datetime





class entry:
    def __init__(self,title, text):
        date = datetime.now()
        self.createDate = date
        self.upDate=date
        self.title = title
        self.text = text
    def update(self,text):
        self.upDate = datetime.now()
        self.text = text
    def render(self):
        out ="{\"title\":\""+self.title+'\",'
        out +="\"createDate\":\""+str(self.createDate)+'\",'
        out +="\"upDate\":\""+str(self.upDate)+'\",'
        out +="\"text\":\""+self.text+'\"}'
        return out
    
class content:
    def __init__(self,name):
        self.entries = []
        self.fileName=name+".json"
    def newEntry(self,title):
        self.entries.append(entry(title,"wip"))
    def update(self, index,text):
        self.entries[index].update(text)

    def render(self):
        out = "{"
        for i,e in enumerate(self.entries):
            out+="\""+str(i)+"\":"
            out+=e.render()
            if((i+1)<len(self.entries)):
                out+=","
        out+="}"
        return out

    def listAll(self):
        for i, ent in enumerate(self.entries):
            print(i,ent.title, "||"+ent.text+"||")



c = content("pizza")
c.newEntry("pls")
c.entries[0].render()


##def main(f,cms):
##    print("owo")
##    #if(len(cms)==0):
##    #    exit()
##    f.close()
##    
##def firstOpen():
##    print("Welcome to nanoCMS")
##    print("------------------")
##    op = ""
##    print("1 - New")
##    print("2 - Open")
##    print("3 - Quit")
##    while type(op)!=int:
##        op =input("?")
##        try:
##            op = int(op)
##            if op not in range(1,4):
##                op = ""
##        except:
##            op = ""
##
##    if op==1:
##        filename = input("New Filename?")
##        f = open(filename+".json","w")
##        main(f,cms)
##    elif op==2:
##        print(op)
##    #else:
##    #    exit()
##
##
##
##firstOpen()
