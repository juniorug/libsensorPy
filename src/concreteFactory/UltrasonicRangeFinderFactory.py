'''
Created on 08/02/2015

@author: zeus
'''
from concretesensor import USonic

class UltrasonicRangeFinderFactory(object):
    '''
    classdocs
    '''

    def factory(self,sensorType):
        #return eval(type + "()")
        if (type == "USonic"): 
            return USonic()
        

    def __init__(self, params):
        '''
        Constructor
        '''
        