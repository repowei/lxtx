package com.lxtx.dao;

import com.lxtx.model.CloudHumanControlConfig;

public interface CloudHumanControlConfigMapper {
    /**
     * 根据主键删除
     * 参数:主键
     * 返回:删除个数
     * @ibatorgenerated 2017-02-14 15:04:21
     */
    int deleteByPrimaryKey(Integer id);

    /**
     * 插入，空属性也会插入
     * 参数:pojo对象
     * 返回:删除个数
     * @ibatorgenerated 2017-02-14 15:04:21
     */
    int insert(CloudHumanControlConfig record);

    /**
     * 插入，空属性不会插入
     * 参数:pojo对象
     * 返回:删除个数
     * @ibatorgenerated 2017-02-14 15:04:21
     */
    int insertSelective(CloudHumanControlConfig record);

    /**
     * 根据主键查询
     * 参数:查询条件,主键值
     * 返回:对象
     * @ibatorgenerated 2017-02-14 15:04:21
     */
    CloudHumanControlConfig selectByPrimaryKey(Integer id);

    /**
     * 根据主键修改，空值条件不会修改成null
     * 参数:1.要修改成的值
     * 返回:成功修改个数
     * @ibatorgenerated 2017-02-14 15:04:21
     */
    int updateByPrimaryKeySelective(CloudHumanControlConfig record);

    /**
     * 根据主键修改，空值条件会修改成null
     * 参数:1.要修改成的值
     * 返回:成功修改个数
     * @ibatorgenerated 2017-02-14 15:04:21
     */
    int updateByPrimaryKey(CloudHumanControlConfig record);
}