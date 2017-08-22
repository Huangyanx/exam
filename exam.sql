/*
Navicat MySQL Data Transfer

Source Server         : connect
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : db

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2015-10-28 22:20:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `exam`
-- ----------------------------
DROP TABLE IF EXISTS `exam`;
CREATE TABLE `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  `A` varchar(255) CHARACTER SET utf8 NOT NULL,
  `B` varchar(255) CHARACTER SET utf8 NOT NULL,
  `C` varchar(255) CHARACTER SET utf8 NOT NULL,
  `D` varchar(255) CHARACTER SET utf8 NOT NULL,
  `answer` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of exam
-- ----------------------------
INSERT INTO `exam` VALUES ('1', '下面算法的时间复杂度为(    )．\r\nint f(unsigned int n) {\r\n    if(n==0||n==1)return  1;\r\n    else return n * f(n-1);\r\n}; ', '0(1) ', 'O(n)', 'O(n2)', 'O(u!)', 'B', 'single');
INSERT INTO `exam` VALUES ('2', '一个向量第一个元素的存储地址是100，每个元素的长度为2，则第5个元素的地址是： ', ' 110\r\n', '108', '100', ' 120', 'C', 'single');
INSERT INTO `exam` VALUES ('3', '一个栈的入栈序列是a,b,c,d,e，则栈的不可能的输出序列是： ', ' edcba\r\n\r\n', 'decba', 'dceab', 'abcde', 'B', 'single');
INSERT INTO `exam` VALUES ('4', '判定一个栈ST（最多元素为m0）为空的条件是： ', ' ST->top<>0\r\n', 'ST->top＝0', 'ST->top<>m0', 'ST->top＝m0', 'C', 'single');
INSERT INTO `exam` VALUES ('5', '循环队列用数组A[0,m－1]存放其元素值，已知其头尾指针分别是front和rear,则当前队列中的元素个数是： ', '(rear-front+m)%m\r\n', 'read-front+1', 'read-front-1', 'read-front', 'D', 'single');
INSERT INTO `exam` VALUES ('6', '不带头结点的单链表head为空的判定条件是： ', 'head=NULL\r\n', 'head->next=NULL', 'head->next=head', ' head!=NULL', 'A', 'single');
INSERT INTO `exam` VALUES ('7', '在一棵完全二叉树中，著编号为i的结点存在左子女，则左子女结点的编号为(    )．\r\n假定树根结点的编号为0。', '2i ', '2i一1', '2i+1', '2i+2', 'C', 'single');
INSERT INTO `exam` VALUES ('8', '对长度为]o的顺序表进行搜索，若搜索前面5个元素的概率相同，均为1／8，搜索后面5个元素的概串相同，均为3／40，则搜索任一元素的平均搜索长度为(    )．', '5.5', '5', '39/8', '19/4', 'C', 'single');
INSERT INTO `exam` VALUES ('9', '向一棵AVL树插入元素时，可能引起对最小不平衡于树的左单或右单旋转的调整词程，此时需要修改相关(    )个指针域的值．', '2', '3', '4', '5', 'B', 'single');
INSERT INTO `exam` VALUES ('10', '对于有向图，其邻接矩阵表示比邻接表表示更易于(    )．', '求一个顶点的入度', '求一个顶点的出边邻接点', '进行图的深度优先遍历 ', '进行图的广度优先遍历', 'A', 'single');
INSERT INTO `exam` VALUES ('11', '在10阶B树申报结点所包含的关键码个数最少为(    )．', '0', '1', '3', '4', 'B', 'single');
INSERT INTO `exam` VALUES ('12', '．在下列排序方法中，（  ）方法平均时间复杂度为0(nlogn)，最坏情况下时间复杂度为0(n2)；（  ）方法所有情况下时间复杂度均为0(nlogn)。', '插入排序', '希尔排序', '快速排序', ' 堆排序', 'D', 'single');
INSERT INTO `exam` VALUES ('13', '在有n个结点的二叉树的二叉链表表示中，空指针数为（ ）。', '不定', 'n+1 ', 'n  ', 'n-1', 'B', 'single');
INSERT INTO `exam` VALUES ('14', '下列二叉树中，（    ）可用于实现符号不等长高效编码。', '最优二叉树  ', '次优查找树', '二叉平衡树', '二叉排序树', 'A', 'single');
INSERT INTO `exam` VALUES ('15', ' 下列查找方法中，（  ）适用于查找有序单链表。', '顺序查找', '二分查找', '分块查找', '哈希查找', 'A', 'single');
INSERT INTO `exam` VALUES ('16', '在顺序表查找中，为避免查找过程中每一步都检测整个表是否查找完毕，可采用（ ）方法。', '设置监视哨 ', '链表存贮', '二分查找 ', '快速查找', 'A', 'single');
INSERT INTO `exam` VALUES ('17', '在一个长度为n的顺序表中顺序查找一个值为x的元盒时．在等概率的情况下，搜索成功时间元素的平均比较次数为(    )．', 'n ', 'n/2', '(n+1)/2', '(n-1)/2', 'C', 'single');
INSERT INTO `exam` VALUES ('18', '带头结点的单链表first为空的判定条件是(    )．', 'first== NULL;', 'first->link ==NULL', 'flrst->link==first', 'first!= NULL', 'B', 'single');
INSERT INTO `exam` VALUES ('19', '已知L是一个不带表头的单链表的表头指针，在表首插入结点*p的操作是(    )', ' p=L; p->link=L;', ' p->link=L; p=L;', 'p->link=L; L=P;', 'L=p; p->link=L;;', 'C', 'single');
INSERT INTO `exam` VALUES ('20', ' 以下说法正确的是（\r\n)', ' 二叉树的特点是每个结点至多只有两棵子树。', '二叉树的子树无左右之分。', '二叉树只能进行链式存储。', '树的结点包含一个数据元素及若干指向其子树的分支。', 'AD', 'multiple');
INSERT INTO `exam` VALUES ('21', '算法设计的要求包括____。', '正确性', '可读性\r\n ', '健壮性\r\n', '确定性', 'ABC', 'multiple');
INSERT INTO `exam` VALUES ('22', '下列属于算法的重要特征的是：', '有穷性\r\n', '确定性', '可行性', ' 输入和输出', 'ABCD', 'multiple');
INSERT INTO `exam` VALUES ('23', '图的四种存储结构\r\n', '邻接矩阵\r\n ', '邻接表', '领结多重表', '十字链表', 'ABCD', 'multiple');
INSERT INTO `exam` VALUES ('24', '依据所有数据成员之间的逻辑关系的不同，数据结构分为（）', '非线性结构\r\n', '逻辑结构', '物理结构', '线性结构', 'AD', 'multiple');
INSERT INTO `exam` VALUES ('25', '图的应用算法有（）', ' 克鲁斯卡尔算法', '哈弗曼算法', '迪杰斯特拉算法', '拓扑排序算法', 'ACD', 'multiple');
INSERT INTO `exam` VALUES ('26', '下列数据结构中，属于线性数据结构的是\r\n____', '栈', '队列', '树', '图', 'AB', 'multiple');
INSERT INTO `exam` VALUES ('27', '线性表的特点正确的（）', '存在唯一的一个被称作”第一个“的数据元素。', '不存在唯一的一个被称作”第一个“的数据元素。', '存在唯一的一个被称作”最后一个“的数据元素。', '不存在唯一的一个被称作”最后一个“的数据元素。', 'AC', 'multiple');
INSERT INTO `exam` VALUES ('28', '下面关于线性表的叙述正确的是（ ）。', '线性表采用顺序存储必须占用一片连续的存储空间', '线性表采用链式存储不必占用一片连续的存储空间\r\n', ' 线性表采用链式存储便于插入和删除操作的实现\r\n ', '线性表采用顺序存储便于插入和删除操作的实现 ', 'ABC', 'multiple');
INSERT INTO `exam` VALUES ('29', ' 下列哪一条不是顺序存储结构的优点？', '存储密度大', '插入运算方便', '可方便的用于各种逻辑结构的存储表示', '删除运算方便 ', 'BCD', 'multiple');
INSERT INTO `exam` VALUES ('30', '线性表的顺序存储结构是一种（）的存储结构\r\n', '随机存取', '顺序存取\r\n\r\n', '索引存取\r\n ', ' 散列存取 ', 'AB', 'multiple');
INSERT INTO `exam` VALUES ('31', '树的表示方法有以下哪几种？（）', '直观表示法\r\n', '嵌套集合表示法', '凹入表示法\r\n', '广义表表示法 ', 'ABCD', 'multiple');
