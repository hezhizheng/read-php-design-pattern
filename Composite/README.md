## 组合模式

### 概述
树形结构在项目中很经常会碰到，当树形结构变得越来越大之后会难以管理。组合模式允许你将对象组合成树形结构来表现“整体/部分”的层次结构。组合能让客户以一致的方式处理个别对象以及对象组合。树里面包含了组合以及个别的对象。

### 实现
本例中，用组合模式来实现导航栏。可以有多级导航栏和二级导航栏。

### 总结与分析
- 使用组合模式，可以将相同的操作应用在组合和个别的对象上，换句话说，在大多数情况下，我们可以忽略对象组合和个别对象之间的差别。
- PS: 将类变成树结构形式调用