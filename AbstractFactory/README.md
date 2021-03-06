## 抽象工厂模式

### 概述
抽象工厂提供一个接口，用于创建相关或依赖对象的家族，而不需要明确制定具体类。它允许可与使用抽象的接口来创建一组相关的产品，而不需要知道实际产出的具体产品是什么。这样一来，客户就从具体的产品种被解耦。抽象工厂模式也遵循了依赖倒置原则，指导我们避免依赖具体类型，而要具体依赖抽象。

### 实现
```
xiaomi group 
cantonFactory shanghaiFactory
```

### 总结与分析
抽象工厂帮助我们将具体实现作封装抽象起来，一边的到更松耦合，更有弹性的设计。
