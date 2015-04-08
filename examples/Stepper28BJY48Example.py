'''
Created on 01/04/2015

@author: Junior Mascarenhas
'''

from concretefactory.stepperMotorActuatorFactory import StepperMotorActuatorFactory

if __name__ == '__main__':

    stepper28bjy48 = StepperMotorActuatorFactory.createActuator("Stepper28BJY48")
    stepper28bjy48.setStepSequence(stepper28bjy48.EIGHT_STEP_SEQUENCE)
    stepper28bjy48.setDirectionAndVelocity(stepper28bjy48.FASTER_CLOCKWISE)
    stepper28bjy48.rotate(20)
