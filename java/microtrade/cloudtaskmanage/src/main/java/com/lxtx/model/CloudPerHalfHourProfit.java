package com.lxtx.model;

import java.io.Serializable;
import java.math.BigDecimal;
import java.util.Date;

public class CloudPerHalfHourProfit implements Serializable {
    /**
     * cloud_per_half_hour_profit.id
     * @ibatorgenerated 2016-11-27 14:54:56
     */
    private Integer id;

    /**
     * cloud_per_half_hour_profit.chnno
     * @ibatorgenerated 2016-11-27 14:54:56
     */
    private String chnno;

    /**
     * cloud_per_half_hour_profit.profit (盈利)
     * @ibatorgenerated 2016-11-27 14:54:56
     */
    private BigDecimal profit;

    /**
     * cloud_per_half_hour_profit.loss (亏损)
     * @ibatorgenerated 2016-11-27 14:54:56
     */
    private BigDecimal loss;

    /**
     * cloud_per_half_hour_profit.commission (手续费)
     * @ibatorgenerated 2016-11-27 14:54:56
     */
    private BigDecimal commission;

    /**
     * cloud_per_half_hour_profit.coupon_commission (用券手续费)
     * @ibatorgenerated 2016-11-27 14:54:56
     */
    private BigDecimal couponCommission;

    /**
     * cloud_per_half_hour_profit.add_user (新增用户量)
     * @ibatorgenerated 2016-11-27 14:54:56
     */
    private Integer addUser;

    /**
     * cloud_per_half_hour_profit.order_count (平仓订单数量)
     * @ibatorgenerated 2016-11-27 14:54:56
     */
    private Integer orderCount;

    /**
     * cloud_per_half_hour_profit.chn_commission (渠道手续费)
     * @ibatorgenerated 2016-11-27 14:54:56
     */
    private BigDecimal chnCommission;

    /**
     * cloud_per_half_hour_profit.date
     * @ibatorgenerated 2016-11-27 14:54:56
     */
    private Date date;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getChnno() {
        return chnno;
    }

    public void setChnno(String chnno) {
        this.chnno = chnno;
    }

    public BigDecimal getProfit() {
        return profit;
    }

    public void setProfit(BigDecimal profit) {
        this.profit = profit;
    }

    public BigDecimal getLoss() {
        return loss;
    }

    public void setLoss(BigDecimal loss) {
        this.loss = loss;
    }

    public BigDecimal getCommission() {
        return commission;
    }

    public void setCommission(BigDecimal commission) {
        this.commission = commission;
    }

    public BigDecimal getCouponCommission() {
        return couponCommission;
    }

    public void setCouponCommission(BigDecimal couponCommission) {
        this.couponCommission = couponCommission;
    }

    public Integer getAddUser() {
        return addUser;
    }

    public void setAddUser(Integer addUser) {
        this.addUser = addUser;
    }

    public Integer getOrderCount() {
        return orderCount;
    }

    public void setOrderCount(Integer orderCount) {
        this.orderCount = orderCount;
    }

    public BigDecimal getChnCommission() {
        return chnCommission;
    }

    public void setChnCommission(BigDecimal chnCommission) {
        this.chnCommission = chnCommission;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }
}