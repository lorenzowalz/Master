#!/bin/bash
# create multiresolution windows icon
ICON_DST=../../src/qt/res/icons/BuzzCoin.ico

convert ../../src/qt/res/icons/BuzzCoin-16.png ../../src/qt/res/icons/BuzzCoin-32.png ../../src/qt/res/icons/BuzzCoin-48.png ${ICON_DST}
