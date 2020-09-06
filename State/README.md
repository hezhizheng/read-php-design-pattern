## 状态模式

### 概述
当需要根据对象不同的状态执行不同的操作的时候，可以使用状态模式。状态模式允许对象在内部状态改变时改变它的行为，使得对象看起来好像修改了它的类。通过将每个状态封装进一个类，把以后需要做的任何改变局部化了。

### 实现
用状态模式实现投票系统。实现控制同一个用户只能投一票，如果一个用户反复投票，而且投票次数超过5次，则判定为恶意刷票，要取消该用户投票的资格，当然同时也要取消他所投的票；如果一个用户的投票次数超过8次，将进入黑名单，禁止再登录和使用系统。

### 总结与分析
状态模式的功能就是分离状态的行为，通过维护状态的变化，来调用不同状态对应的不同功能。也就是说，状态和行为是相关联的，它们的关系可以描述为：状态决定行为。状态模式的行为是平行性的，不可相互替换的；而策略模式的行为是平等性的，是可以相互替换的。