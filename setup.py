import os
from setuptools import setup

# Utility function to read the README file.
# Used for the long_description.  It's nice, because now 1) we have a top level
# README file and 2) it's easier to type in the README file than to put a raw
# string in below ...
def read(fname):
    return open(os.path.join(os.path.dirname(__file__), fname)).read()

setup(
    name = "libsensorPy",
    version = "0.0.3",
    author = "Junior Mascarenhas",
    author_email = "juniorug@gmail.com",
    description = ("An extendable python library to manipulate sensors coupled to the Raspberry Pi"),
    license = "BSD",
    keywords = "example documentation tutorial",
    url = "https://github.com/juniorug/libsensorPy",
    packages=['abstractclass', 'compositesensor', 'concretefactory', 'concretesensor', 'examples', 'extension','concreteactuator', 'utils'],
    long_description=read('README'),
    classifiers=[
        "Development Status :: 3 - Alpha",
        "Topic :: Utilities",
        "License :: OSI Approved :: BSD License",
    ],
)
