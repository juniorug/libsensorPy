'''
Created on 03/04/2015

@author: Junior Mascarenhas
Stepper motors fall somewhere in between a regular DC motor and a servo motor.
'''
import RPi.GPIO as GPIO
from abstractclass.stepperMotorActuator import StepperMotorActuator
import time

class Stepper28BJY48 (StepperMotorActuator):
    '''
    classdocs
    '''
    FOUR_STEP_SEQUENCE = 4
    EIGHT_STEP_SEQUENCE = 8
    CLOCKWISE = 1
    FASTER_CLOCKWISE = 2
    ANTI_CLOCKWISE = -1
    FASTER_ANTI_CLOCKWISE = -2

    def __init__(self, stepDir = 2,waitTime = 10):
        """
        @param stepDir: The direction and velocity of rotation
        @type stepDir: int8
        @param waitTime: The time that the motor wil rotate
        @type waitTime: float
        """   
        StepperMotorActuator.__init__(self)
        self.setup(stepDir, waitTime)

    def setup(self,stepDir = 2,waitTime = 10):
        """
        Setup the Actuator
        @param stepDir: The direction and velocity of rotation
        @type stepDir: int8
        @param waitTime: The time that the motor wil rotate
        @type waitTime: float
        """      
        
        GPIO.setmode(GPIO.BCM)
        GPIO.setwarnings(False)
        # GPIO17,GPIO22,GPIO23,GPIO24
        self.__stepPins = [17,22,23,24]
        for pin in self.__stepPins:
            GPIO.setup(pin,GPIO.OUT)
            GPIO.output(pin, False)
        # Define advanced sequence
        # as shown in manufacturers datasheet
        self.__seq = [[1,0,0,0],
            [1,1,0,0],
            [0,1,0,0],
            [0,1,1,0],
            [0,0,1,0],
            [0,0,1,1],
            [0,0,0,1],
            [1,0,0,1]]
        self.__stepCount = len(self.__seq)-1
        self.__stepDir = stepDir
        self.__waitTime = waitTime / float(1000)
        self.__stepCounter = 0

    def changeSetup(self,stepDir = 2,waitTime = 10):
        """
        Changes the Actuator's setup 
        @param stepDir: The direction and velocity of rotation
        @type stepDir: int8
        @param waitTime: The time that the motor wil rotate
        @type waitTime: float
        """  
        self.__stepDir = stepDir
        self.__waitTime = waitTime / float(1000)

    def setWaitTime(self,waitTime = 10):
        """
        Sets the time that the motor wil rotate
        @param waitTime: The time that the motor wil rotate
        @type waitTime: float
        """
        self.__waitTime = waitTime

    def setStepSequence(self, stepSequence = 8):
        """
        Sets the sequence: 4 or 8 steps
        @param stepSequence: The step sequence
        @type stepSequence: int8
        """
        self.__stepCount = stepSequence

    def setDirectionAndVelocity(self,stepDir = 2):
        """ 
        Sets the rotation's direction and velocity
        @param stepDir: 1 = clockwise, 2 = fast-clockwise, -1 = anti-clockwise,-2 = fast-anti-clockwise  
        @type stepDir: int8
        """
        self.__stepDir = stepDir

    def rotate(self,waitTime = 10):
        """
        Rotates the Motor
        @param waitTime: The time that the motor wil rotate
        @type waitTime: float
        """

        self.setWaitTime(waitTime)
        for pin in range(0, 4):
            pinX = self.__stepPins[pin]
            if (self.__seq[self.__stepCounter][pin]!= 0):
                GPIO.output(pinX, True)
            else:
                GPIO.output(pinX, False)

        self.__stepCounter += self.__stepDir

        # If we reach the end of the sequence
        # start again
        if (self.__stepCounter >= self.__stepCount):
            self.__stepCounter = 0
        if (self.__stepCounter < 0):
            self.__stepCounter = self.__stepCount

        # Wait before moving on
        time.sleep(self.__waitTime)