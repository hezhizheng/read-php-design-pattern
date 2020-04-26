## 备忘录模式

### 概述
备忘者模式是在不破坏封装性的前提下捕获一个对象的内部状态，并在该对象之外保存这个状态。这样以后就可将对象恢复到原先保存的状态。一个备忘录就是一个对象，它存储另一个对象在某个瞬间的内部状态，后者被称为备忘录的原发器。捕获对象状态的目的是为了在以后的某个时候，将该对象的状态恢复到备忘录所保存的状态。

### 实现
使用一个运动记录来实现备忘录模式。程序可以保存跑步的状态，然后在进行骑行或者健身时将跑步的记录添加进去完成当天的运动。

### 总结与分析
备忘录模式的本质是保存和恢复内部状态。在需要保存对象在某一个时刻的全部或者部分状态然后以后可以恢复该状态是可以使用备忘录模式。